<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: rgba(0, 0, 0, 0.5);
            /* Transparent background */
        }

        .custom-form {
            max-width: 400px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            /* Form background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            /* Form shadow */
        }

        .custom-form input[type="text"],
        .custom-form input[type="email"],
        .custom-form input[type="password"] {
            /* Your input styles */
            width: calc(100% - 8px);
            /* Subtracting padding and border width */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .custom-form button {
            /* Your button styles */
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
    <div class="custom-form text-white">
        <h2 class="text-2xl font-bold pb-5">Login</h2>
        <form action="login.php" method="post"> <!-- Updated action to the correct login handling PHP file -->
            <div class="mb-4">
                <label for="email" class="block mb-2 text-sm font-medium">Your email</label>
                <input type="email" id="email" name="email" placeholder="andrew@mail.com" required value="">
                <!-- Added 'name="email"' attribute -->
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-2 text-sm font-medium">Your password</label>
                <input type="password" id="password" name="password" placeholder="*********" required value="">
                <!-- Added 'name="password"' attribute -->
            </div>
            <div>
                <p class="text-red-500 pb-5"></p>
            </div>
            <div class="flex items-center justify-between mb-2 w-64">
                <button type="submit" name="submit">Log in</button>
                <div class="flex items-center text-sm px-15">
                    <a href="register.php">
                        <p class="underline cursor-pointer w-32 ml-3">Sign up</p>
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>