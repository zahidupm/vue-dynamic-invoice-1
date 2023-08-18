<?php
// Define the Logging interface
interface Logging {
    public function log($message);
}

// Implement the FileLogger class that writes logs to a file
class FileLogger implements Logging {
    private $logFile;

    public function __construct($logFile) {
        $this->logFile = $logFile;
    }

    public function log($message) {
        // Write the log message to the file
        file_put_contents($this->logFile, $message . PHP_EOL, FILE_APPEND);
    }
}

// Implement the ConsoleLogger class that logs messages to the console
class ConsoleLogger implements Logging {
    public function log($message) {
        // Output the log message to the console
        echo $message . PHP_EOL;
    }
}

// Usage of the logging system in the Main class
class Main {
    private $logger;

    public function __construct(Logging $logger) {
        $this->logger = $logger;
    }

    public function performAction() {
        // Perform some action
        // Log a message using the logger
        $this->logger->log("Action performed successfully");
    }
}

// Create an instance of FileLogger and use it in the Main class
$fileLogger = new FileLogger("log.txt");
$main = new Main($fileLogger);
$main->performAction();

// Create an instance of ConsoleLogger and use it in the Main class
$consoleLogger = new ConsoleLogger();
$main = new Main($consoleLogger);
$main->performAction();