<?php
    require_once '../Sessions/authenticate.session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>End User Dashboard</title>
    <link rel="stylesheet" href="../Styles/style.enduserdashboard.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>End User Dashboard</h2>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">View Budget</a></li>
                    <li><a href="#">Purchase Requests</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="content">
            <header>
                <h1>Welcome, [End User Name]</h1>
                <p>Your department's current budget status is shown below.</p>
            </header>

            <!-- Budget Summary -->
            <section class="budget-summary">
                <div class="card">
                    <h3>Total Budget</h3>
                    <p>$10,000</p>
                </div>
                <div class="card">
                    <h3>Remaining Balance</h3>
                    <p>$7,500</p>
                </div>
                <div class="card">
                    <h3>Approved Requests</h3>
                    <p>5</p>
                </div>
            </section>

            <!-- Recent Purchase Requests -->
            <section class="requests">
                <h2>Recent Purchase Requests</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>Item</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Laptop</td>
                            <td>$1,200</td>
                            <td>Approved</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Printer</td>
                            <td>$300</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Office Chairs</td>
                            <td>$500</td>
                            <td>Denied</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
        <form action="../Handler/logout.handler.php" method="get">
        <button name="logout">LOGOUT</button>
    </form>
    </div>
</body>
</html>