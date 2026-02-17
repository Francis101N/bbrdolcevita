<?php
session_start();
if (!isset($_SESSION['admin_user'])) {
    header("Location: index.php");
    exit;
}

$error = $_GET['error'] ?? '';
$success = $_GET['success'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Suite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-xl rounded-2xl w-full max-w-3xl p-8 m-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Add New Suite</h2>

        <?php if ($error): ?>
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <?php if ($success): ?>
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4"><?= htmlspecialchars($success) ?></div>
        <?php endif; ?>

        <form action="proc-add-suite.php" method="POST" enctype="multipart/form-data" class="space-y-6">

            <!-- Suite Image -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Suite Image 1</label>
                <input type="file" name="suite_image1" required class="block w-full text-sm text-gray-600
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-[#87ceeb] file:text-white
                hover:file:bg-black">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Suite Image 2</label>
                <input type="file" name="suite_image2" required class="block w-full text-sm text-gray-600
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-[#87ceeb] file:text-white
                hover:file:bg-black">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Suite Image 3</label>
                <input type="file" name="suite_image3" required class="block w-full text-sm text-gray-600
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-[#87ceeb] file:text-white
                hover:file:bg-black">
            </div>

            <!-- Suite Name -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Suite Name</label>
                <input type="text" name="suite_name" required class="w-full p-3 border border-gray-300 rounded-lg
                focus:outline-none focus:ring-2 focus:ring-[#87ceeb]">
            </div>

            <!-- Suite Description -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Description</label>
                <textarea name="suite_description" rows="6" required class="w-full p-3 border border-gray-300 rounded-lg
                focus:outline-none focus:ring-2 focus:ring-[#87ceeb]"></textarea>
            </div>

            <!-- Price -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Price</label>
                <input type="number" name="suite_price" min="0" step="any" required class="w-full p-3 border border-gray-300 rounded-lg
                focus:outline-none focus:ring-2 focus:ring-[#87ceeb]">
            </div>

            <!-- Max Occupancy -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Max Occupancy</label>
                <input type="number" name="max_occupancy" min="1" required class="w-full p-3 border border-gray-300 rounded-lg
                focus:outline-none focus:ring-2 focus:ring-[#87ceeb]">
            </div>

            <!-- Total Rooms -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Total Rooms</label>
                <input type="number" name="total_rooms" min="1" required class="w-full p-3 border border-gray-300 rounded-lg
                focus:outline-none focus:ring-2 focus:ring-[#87ceeb]">
            </div>

            <!-- Available Rooms -->
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Available Rooms</label>
                <input type="number" name="available_rooms" min="0" required class="w-full p-3 border border-gray-300 rounded-lg
                focus:outline-none focus:ring-2 focus:ring-[#87ceeb]">
            </div>
            <!-- Availability Status -->
            <div>
                <label for="availability_status">Availability Status</label><br>
                <select name="availability_status" id="availability_status" class="w-full p-3 mt-2 border border-gray-300 rounded-lg
                focus:outline-none focus:ring-2 focus:ring-[#87ceeb]">
                    <option value=""></option>
                    <option value="Available">Available</option>
                    <option value="Occupied">Occupied</option>
                </select>

            </div>

            <!-- Submit -->
            <div class="flex justify-end gap-3">

                <button type="submit"
                    class="bg-[#87ceeb] text-white font-semibold py-3 px-6 rounded-lg hover:bg-black transition">
                    Add Suite
                </button>
            </div>

        </form>
    </div>

</body>

</html>