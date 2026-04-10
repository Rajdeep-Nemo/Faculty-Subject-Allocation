<?php
session_start();
if (!isset($_SESSION['hod_authenticated'])) {
    header('Location: hod-dashboard.php');
    exit;
}

require_once 'db.php';

$filename = 'brainware_faculty_allocation_' . date('Y-m-d') . '.csv';

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Pragma: no-cache');
header('Expires: 0');

$output = fopen('php://output', 'w');

// CSV Header Row
fputcsv($output, [
    'Sr. No.',
    'Faculty Name',
    'Subject 1',
    'Subject 2',
    'Subject 3',
    'Subject 4',
    'Submitted At'
]);

// Fetch data
$result = $conn->query("SELECT * FROM faculty_submissions ORDER BY submitted_at ASC");

$sr = 1;
while ($row = $result->fetch_assoc()) {
    fputcsv($output, [
        $sr++,
        $row['faculty_name'],
        $row['subject_1'],
        $row['subject_2'],
        $row['subject_3'],
        $row['subject_4'],
        date('d M Y, h:i A', strtotime($row['submitted_at']))
    ]);
}

fclose($output);
$conn->close();
exit;
?>
