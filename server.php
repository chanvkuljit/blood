<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Data</title>
    <!-- Include Tailwind CSS stylesheet -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-200">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-blue-300 p-6 rounded-lg shadow-md w-80">
            <?php
            $Name = $_GET["Name"];
            $Disease = $_GET["Disease"];
            $Email = $_GET["Email"];
            $Blood = $_GET["Blood"];
            $Gender = $_GET["gender"];
            $Age = $_GET["Age"];
            $Number = $_GET["Number"];
            ?>

            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Field</th>
                        <th class="px-4 py-2">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2">Name</td>
                        <td class="px-4 py-2"><?php echo $Name; ?></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Number</td>
                        <td class="px-4 py-2"><?php echo $Number; ?></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Gender</td>
                        <td class="px-4 py-2"><?php echo $Gender; ?></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Blood Group</td>
                        <td class="px-4 py-2"><?php echo $Blood; ?></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Email</td>
                        <td class="px-4 py-2"><?php echo $Email; ?></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Any Disease</td>
                        <td class="px-4 py-2"><?php echo $Disease; ?></td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2">Age</td>
                        <td class="px-4 py-2"><?php echo $Age; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>