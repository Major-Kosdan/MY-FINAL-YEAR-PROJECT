<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: auth/login.php");
    exit();
}

require_once 'includes/db.php';

$email = $_SESSION['email'];
$stmt = $pdo->prepare("SELECT username FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$username = $user ? $user['username'] : 'User';
?>

<?php include('includes/header.php'); ?>

<!-- Dark Mode Toggle -->
<div class="theme-toggle">
    <label class="switch">
        <input type="checkbox" id="toggleDark">
        <span class="slider round"></span>
    </label>
    <span class="toggle-label">🌙 Dark Mode</span>
</div>

<section class="dashboard-section">
    <div class="dashboard-box animate-slide-in">
        <!-- Skeleton Loader Placeholder -->
        <div id="loader" class="skeleton-loader"></div>

        <!-- Actual Content -->
        <div id="dashboard-content" class="hidden">
            <div class="profile-card" data-sr>
                <div class="avatar-circle"><?php echo strtoupper($username[0]); ?></div>
                <h2>Hello, <?php echo htmlspecialchars($username); ?> 👋</h2>
                <p class="welcome-text">Welcome to <strong>UNNify</strong> – Your Campus Marketplace 🎓</p>
                <div class="activity-highlight">
                    <span>You have <strong>3</strong> active listings</span> <!-- Just a mockup -->
                </div>
            </div>

            <div class="dashboard-grid">
                <a href="post_item.php" class="dashboard-card" data-tippy-content="Sell something!">
                    <div class="card-icon">📦</div>
                    <h3>Post Item</h3>
                    <p>List items for sale</p>
                </a>

                <a href="view_listings.php" class="dashboard-card" data-tippy-content="View items from others">
                    <div class="card-icon">🛒</div>
                    <h3>View Listings</h3>
                    <p>Explore marketplace</p>
                </a>

                <a href="profile.php" class="dashboard-card" data-tippy-content="Update your info">
                    <div class="card-icon">🙍‍♂️</div>
                    <h3>My Profile</h3>
                    <p>Update details</p>
                </a>

                <a href="auth/logout.php" class="dashboard-card logout-card" data-tippy-content="Log out of UNNify">
                    <div class="card-icon">🔓</div>
                    <h3>Logout</h3>
                    <p>End your session</p>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
