<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrement</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .custom-form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .custom-form {
            max-width: 400px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            color: white;
        }

        .custom-form input[type="text"],
        .custom-form input[type="email"],
        .custom-form input[type="password"] {
            width: calc(100% - 8px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .custom-form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: purple;
            color: white;
        }
    </style>

</head>

<body>
    <div class="custom-form-container">
        <div class="custom-form bg-black-80 w-full max-w-md p-8 rounded-lg shadow-lg">
            <div class="text-center">
                <img class="mx-auto h-12 w-auto" src="https://www.svgrepo.com/show/301692/login.svg" alt="Workflow">
                <h2 class="mt-6 text-3xl font-extrabold text-white">
                    Create a new account
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Or
                    <a href="#" class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        login to your account
                    </a>
                </p>
            </div>
            <form class="mt-8 space-y-6" method="POST" action="includes/signup.inc.php">
                <div>
                    <label for="username" class="block text-sm font-medium text-white">Username</label>
                    <input id="username" name="username" type="text" placeholder="Enter the Username" required="" class="mt-1 block p-2 w-full rounded-md border-gray-300 focus:border-blue-500 border-solid focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-white">Email address</label>
                    <input id="email" name="email" type="email" placeholder="user@example.com" required="" class="mt-1 block p-2 w-full rounded-md border-solid border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-white">Password</label>
                    <input id="password" name="password" type="password" placeholder="Enter the password" required="" class="mt-1 block w-full rounded-md p-2 border-gray-300 border-solid focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                </div>
                <div>

                    <div>
                        <button type="submit" name="submit" onclick="return validateForm()" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Create account
                        </button>
                    </div>
            </form>
        </div>
    </div>

    <script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('password_confirmation').value;

            if (username === '' || email === '' || password === '' || confirmPassword === '') {
                alert('Please fill in all the fields.');
                return false;
            }

            return true;
        }
    </script>
</body>

</html>
jjjjjjjjjjjjjjj