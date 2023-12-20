<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Ticket System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans antialiased bg-gray-100">
    <!-- Navigation bar -->
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Advanced Ticket System</h1>
            <!-- Add your navigation links here -->
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-gray-300">Home</a></li>
                <li><a href="#" class="hover:text-gray-300">Dashboard</a></li>
                <li><a href="#" class="hover:text-gray-300">Settings</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto py-8">
        <div class="flex justify-between mx-12 items-center mb-4">
            <h2 class="text-xl font-semibold">Ticket List</h2>
            <!-- Button to add a new ticket -->
            <a href="creat_ticket.php"><button id="addTicketBtn" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Ajouter un ticket</button></a>
        </div>

        <!-- Ticket table -->
        <div class="bg-white mx-12 rounded-lg shadow-md p-6">
            <div class="overflow-x-auto">
                <table class="w-full border-collapse mb-4">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4">Ticket ID</th>
                            <th class="py-2 px-4">Subject</th>
                            <th class="py-2 px-4">Status</th>
                            <th class="py-2 px-4">Priority</th>
                            <th class="py-2 px-4">Deadline</th>
                            <th class="py-2 px-4">Tag</th>
                        </tr>
                    </thead>
                    <tbody id="ticketTableBody">
                        <!-- Example ticket items -->
                        <tr>
                            <td class="py-2 px-4">1</td>
                            <td class="py-2 px-4">Website Design</td>
                            <td class="py-2 px-4">Open</td>
                            <td class="py-2 px-4">High</td>
                            <td class="py-2 px-4">2023-12-16 09:00</td>
                            <td class="py-2 px-4">2023</td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4">2</td>
                            <td class="py-2 px-4">Bug Fixing</td>
                            <td class="py-2 px-4">In Progress</td>
                            <td class="py-2 px-4">Medium</td>
                            <td class="py-2 px-4">2023-12-17 13:30</td>
                        </tr>
                        <!-- Add more ticket items dynamically -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Ticket creation form (hidden by default) -->
        <div id="addTicketForm" class="hidden bg-white rounded-lg shadow-md p-6 mt-4">
            <h2 class="text-xl font-semibold mb-4">Create New Ticket</h2>
            <form action="creat_ticket.php" method="post">
                <div class="mb-4">
                    <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                    <input type="text" id="subject" name="subject" class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" name="description" rows="4" class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50"></textarea>
                </div>
                <div class="mb-4">
                    <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
                    <select id="priority" name="priority" class="mt-1 block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-300">Create Ticket</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Toggle visibility of the add ticket form
        document.getElementById('addTicketBtn').addEventListener('click', function() {
            const addTicketForm = document.getElementById('addTicketForm');
            addTicketForm.classList.toggle('hidden');
        });