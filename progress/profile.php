<!DOCTYPE html>
<html>

<head>
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            display: flex;
            /* Use flexbox to center the container */
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
            height: 100vh;
            /* Take the full viewport height */
            background-image: url("back-ground.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .container.profile {
            max-width: 800px;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            background-color: #fff;
            margin: 50px auto;
            height: 500px;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
            font-size: 30px;
            color: #333;
        }


        .profile-info {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            font-size: 20px;
        }

        .logout-button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
            display: block;
            margin: 20px auto 0;
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 20px;
            overflow: hidden;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

</head>

<body>
    <div class="container profile">
        <h2>User Profile</h2>
        <div class="profile-picture">
            <img src="basicavt.jpg" alt="">
        </div>
        <div class="profile-info">
            <table>
                <tr>
                    <td><strong>Username:</strong></td>
                    <td><span id="username"></span></td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td><span id="email"></span></td>
                </tr>
                <tr>
                    <td><strong>Full Name:</strong></td>
                    <td><span id="fullName"></span></td>
                </tr>
                <tr>
                    <td><strong>Date of Birth:</strong></td>
                    <td><span id="dob"></span></td>
                </tr>
            </table>
        </div>
        <button class="logout-button">Trang chủ</button>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const usernameSpan = document.getElementById('username');
            const emailSpan = document.getElementById('email');
            const fullNameSpan = document.getElementById('fullName');
            const dobSpan = document.getElementById('dob');
            const logoutButton = document.querySelector('.logout-button');

            // Fetch user data from the server using an API endpoint
            fetch('get_user_data.php')
                .then(response => response.json())
                .then(userData => {
                    // Display user data on profile page
                    usernameSpan.textContent = userData.username;
                    emailSpan.textContent = userData.email;
                    fullNameSpan.textContent = userData.full_name;
                    dobSpan.textContent = userData.date_of_birth;
                })
                .catch(error => {
                    console.error('Error fetching user data:', error);
                });

            logoutButton.addEventListener('click', function () {
                // Redirect to login page after logout
                window.location.href = 'homepage.php';
            });
        });
    </script>
</body>

</html>