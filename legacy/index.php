<?php
// Reconstructed core entrypoint based on the documented project scope.
$rooms = [
    ['id' => 1, 'name' => 'Standard Room', 'price' => 1200, 'available' => true],
    ['id' => 2, 'name' => 'Deluxe Room', 'price' => 1800, 'available' => true],
];
?><!doctype html>
<html lang="en">
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Accommodation Booking</title></head>
<body>
<h1>Accommodation Booking</h1>
<p>Search accommodation, view details, select dates, check availability and create a booking.</p>
<ul>
<?php foreach ($rooms as $room): ?>
<li><?= htmlspecialchars($room['name']) ?> — <?= number_format($room['price']) ?> THB/night — <?= $room['available'] ? 'Available' : 'Unavailable' ?></li>
<?php endforeach; ?>
</ul>
</body></html>
