<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="Author" content="Mao Ye">
            <meta name="Group" content="04">
            <meta name="Description" content="Assignment 02">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link href="https://fonts.googleapis.com/css2?family=Saira:wght@800&family=Great+Vibes&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="css/uniform.css">
            <link rel="stylesheet" href="css/profile.css">
            <title>Children Immunization Record System (CIRS)</title>
        </head>
        <body>
            <!-- ============= Sticky NavBar ============= -->
            <nav class="header navbar">
                <a href="index.html" id="logo"><h3>C I R S</h3></a>
                <ul>
                    <li><a class="navanchor" href="">Vaccines</a></li>
                    <li><a class="navanchor" href="">Register/Login</a></li>
                    <li><a class="navanchor" href="">About Us</a></li>
                </ul>
            </nav>
            <main class="hero">
            <div class="container">
                <h1>Personal Info</h1>
                <h4>[If you want to change your personal info, please contact admin]</h4>
                <table class="personalInfo">
                    <tbody>
                        <tr class="name">
                        <td>Name:</td>
                        <td>TBD</td>
                        </tr>
                        <tr class="HCN">
                        <td>Health Card:</td>
                        <td>TBD</td>
                        </tr>
                        <tr class="email">
                        <td>Email Address:</td>
                        <td>TBD</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container">
                <form class="chanPass"  method="POST" action="submit.php"  target="_self">
                    <fieldset>
                    <legend> Change Password </legend>
                    <label for="password">Current Password:</label><br>
                    <input type="password" id="Opass" name="password"><br>
                    <label for="password">New Password:</label><br>
                    <input type="password" id="Npass" name="password"><br>
                    <label for="password">Password Confirm:</label><br>
                    <input type="password" id="Cpass" name="password"><br>
                    <input type="submit" value="Submit"><br><br>
                    </fieldset>
                </form>
            </div>
            <div class="rcontainer">
                <h1>Baby Info</h1>
                <table class="personalInfo">
                    <tbody>
                        <th class="name">Name</th>
                        <th class="DOB">Date of Birth</th>
                        <th class="sex">Sex</th>
                    </tbody>
                </table>
            </div>

            </main>
            <footer>
                <address>@2022 Web Programming Assignment02 Group[4], All right reserved,  Mao Ye; Qingfang Tan; Tanzim Ahmed Sagar; Xiaopeng Li</address>
            </footer>
            <script src="js/profile.js"></script>
        </body>
    </html>