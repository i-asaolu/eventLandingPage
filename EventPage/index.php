<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCon 2024</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'eventDetails.php'; ?>

    <header>
        <h1><?php echo $eventName; ?></h1>
        <p>Date: <?php echo $eventDate; ?></p>
        <p>Time: <?php echo $eventTime; ?></p>
        <p>Location: <?php echo $eventLocation; ?></p>
    </header>

    <section id="description">
        <p><?php echo $eventDescription; ?></p>
    </section>

    <section id="registration">
        <!-- Registration form will be added here -->
    </section>
</body>
</html>
