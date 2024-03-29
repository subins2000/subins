Zencoder API PHP Library
==========================

Author:  [Michael Christopher] (mchristopher (a) brightcove (.) c&#1;om)
Company: [Zencoder - Online Video Encoder](//www.zencoder.com)
Version: 2.1.1
Date:    2012-08-02
Repository: <//github.com/zencoder/zencoder-php/>

Parts of this library are based on <//github.com/twilio/twilio-php>

For more details on v2 of the Zencoder API visit
<//blog.zencoder.com/2012/01/05/announcing-zencoder-api-v2/>

For more details on the Zencoder API requirements visit
<//app.zencoder.com/docs/api>

To start working with the library, create a new instance of the Services_Zencoder class, passing
your API Key as the 1st parameter.

    $zencoder = new Services_Zencoder('93h630j1dsyshjef620qlkavnmzui3');

Once you have created the object, you can use it to interact with the API. For full information,
see the Documentation folder, but here is a quick overview of some of the functions that can be
called:

    $zencoder->accounts->create($array);
    $zencoder->jobs->create($array);
    $zencoder->jobs->progress($job_id);
    $zencoder->inputs->details($input_id);
    $zencoder->outputs->details($output_id);
    $zencoder->notifications->parseIncoming();

Any errors will throw a Services_Zencoder_Exception. You can call getErrors() on an exception
and it will return any errors received from the Zencoder API.


ENCODING JOB
------------
The ZencoderJob object creates an encoding job using [cURL](//zencoder.com/docs/glossary/curl/)
to send [JSON](//zencoder.com/docs/glossary/json/) formatted parameters to Zencoder's encoding API.

### Step 1
Visit the [API builder](https://app.zencoder.com/api_builder) in your account,
and execute a successful encoding job.

### Step 2
Copy the successful JSON string, starting with the first curly brace "{",
and pass it as the parameters for a new ZencoderJob object. Execute the script on your server to test that it works.

#### Example
    <pre>
    <?php

    // Make sure this points to a copy of Zencoder.php on the same server as this script.
    require_once('Services/Zencoder.php');

    try {
      // Initialize the Services_Zencoder class
      $zencoder = new Services_Zencoder('93h630j1dsyshjef620qlkavnmzui3');

      // New Encoding Job
      $encoding_job = $zencoder->jobs->create(
        array(
          "input" => "s3://bucket-name/file-name.avi",
          "outputs" => array(
            array(
              "label" => "web"
            )
          )
        )
      );

      // Success if we got here
      echo "w00t! \n\n";
      echo "Job ID: ".$encoding_job->id."\n";
      echo "Output ID: ".$encoding_job->outputs['web']->id."\n";
      // Store Job/Output IDs to update their status when notified or to check their progress.
    } catch (Services_Zencoder_Exception $e) {
      // If were here, an error occured
      echo "Fail :(\n\n";
      echo "Errors:\n";
      foreach ($e->getErrors() as $error) echo $error."\n";
      echo "Full exception dump:\n\n";
      print_r($e);
    }

    echo "\nAll Job Attributes:\n";
    var_dump($encoding_job);

    ?>
    </pre>

### Step 3
Modify the above script to meet your needs.  
Your [API Request History](https://app.zencoder.com/api_requests) may come in handy.  
You can revisit your [API builder](https://app.zencoder.com/api_builder) to add/update parameters of the JSON.  

You can translate the JSON string into nested associative arrays so that you can dynamically change attributes like "input".  
The previous JSON example would become:

    $encoding_job = $zencoder->jobs->create(array(
      "input" => "s3://bucket-name/file-name.avi",
      "outputs" => array(
        array(
          "label" => "web"
        )
      )
    ));

NOTIFICATION HANDLING
----------------------
The ZencoderOutputNotification class is used to capture and parse JSON data sent from
Zencoder to your app when an output file has been completed.



### Step 1
Create a script to receive notifications, and upload it to a location on your server that is publicly accessible.

#### Example
    <?php

    // Make sure this points to a copy of Zencoder.php on the same server as this script.
    require_once('Services/Zencoder.php');

    // Initialize the Services_Zencoder class
    $zencoder = new Services_Zencoder('93h630j1dsyshjef620qlkavnmzui3');

    // Catch notification
    $notification = $zencoder->notifications->parseIncoming();

    // Check output/job state
    if($notification->job->outputs[0]->state == "finished") {
      echo "w00t!\n";

      // If you're encoding to multiple outputs and only care when all of the outputs are finished
      // you can check if the entire job is finished.
      if($notification->job->state == "finished") {
        echo "Dubble w00t!";
      }
    } elseif ($notification->job->outputs[0]->state == "cancelled") {
      echo "Cancelled!\n";
    } else {
      echo "Fail!\n";
      echo $notification->job->outputs[0]->error_message."\n";
      echo $notification->job->outputs[0]->error_link;
    }

    ?>

### Step 2
In the parameters for an encoding job, add the URL for your script to the notifications array of each output you want to be notified for. 
Then submit the job to test if it works.  

**You can view the results at:**  
<https://app.zencoder.com/notifications>

#### Example
    ...
    "outputs" => array(
      array(
        "label" => "web",
        "notifications" => array("//example.com.com/encoding/notification.php")
      ),
      array(
        "label" => "iPhone",
        "notifications" => array("//example.com.com/encoding/notification.php")
      )
    )
    ...


### Step 3
Modify the above script to meet your needs.  
Your [notifications page](https://app.zencoder.com/notifications) will come in handy.

VERSIONS
---------
    Version 2.1.1 - 2012-08-02    Fixing issue where jobs index call didn't return jobs as individual objects
    Version 2.1.0 - 2012-06-05    Adding support for job-level notifications & merging output with job in notification object
    Version 2.0.2 - 2012-01-11    Fixed job creation response object, added documentation to variables
    Version 2.0.1 - 2012-01-10    Added ability to get error info from API
    Version 2.0   - 2012-01-02    Complete refactoring of library
    Version 1.6   - 2011-10-24    Fixed issue with user agents in cURL
    Version 1.4   - 2011-10-06    Fixed error with adding api_key to URL
    Version 1.3   - 2011-09-21    Fixed bundled SSL certification chain and made catch_and_parse() static
    Version 1.2   - 2011-08-06    Added fixes for PHP Notices and SSL handling
    Version 1.1   - 2010-06-04    Added General API Requests
    Version 1.0   - 2010-04-02    Jobs and Notifications.
