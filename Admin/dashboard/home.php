<!-- filepath: /var/www/html/QuickPG/Admin/dashboard/home.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f4f7ff;
            --card: #ffffff;
            --text-main: #1f2a44;
            --text-muted: #64748b;
            --primary: #5b6cff;
            --primary-soft: #eef0ff;
            --success: #1fbe84;
            --warning: #ffb020;
            --danger: #f04438;
        }

        body {
            background: radial-gradient(circle at top right, #e8edff 10%, var(--bg) 40%);
            color: var(--text-main);
            font-family: "Inter", sans-serif;
            min-height: 100vh;
        }

        .dashboard-wrapper {
            max-width: 1200px;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.08);
            backdrop-filter: blur(8px);
            border-radius: 18px;
        }

        .hero-card {
            background: linear-gradient(135deg, #5b6cff 0%, #4f46e5 100%);
            border-radius: 24px;
            color: #fff;
            box-shadow: 0 18px 40px rgba(79, 70, 229, 0.25);
        }

        .hero-title {
            font-size: 2rem;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        .hero-subtitle {
            color: rgba(255, 255, 255, 0.85);
            margin-bottom: 0;
        }

        .stat-card {
            border: none;
            border-radius: 18px;
            padding: 0.25rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 30px rgba(15, 23, 42, 0.1);
        }

        .stat-icon {
            width: 44px;
            height: 44px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            background: var(--primary-soft);
            color: var(--primary);
            font-size: 1.2rem;
        }

        .stat-label {
            color: var(--text-muted);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: 800;
            margin: 0;
            line-height: 1.1;
        }

        .stat-trend {
            font-size: 0.85rem;
            font-weight: 600;
        }

        .section-title {
            font-size: 1.05rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .progress {
            height: 10px;
            border-radius: 999px;
            background-color: #edf2ff;
        }

        .activity-item + .activity-item {
            border-top: 1px dashed #e2e8f0;
            margin-top: 0.9rem;
            padding-top: 0.9rem;
        }

        .status-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 0.4rem;
        }

        .quick-action {
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 0.85rem 1rem;
            text-decoration: none;
            color: var(--text-main);
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.2s ease;
        }

        .quick-action:hover {
            border-color: #c7d2fe;
            background: #f8f9ff;
            color: var(--primary);
        }
    </style>
</head>
<body>
    <div class="container py-4 py-lg-5 dashboard-wrapper">
        <div class="hero-card p-4 p-lg-5 mb-4">
            <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between gap-3">
                <div>
                    <p class="mb-2 fw-semibold text-uppercase small">QuickPG Admin Panel</p>
                    <h1 class="hero-title mb-2">Dashboard Overview</h1>
                    <p class="hero-subtitle">Track hostels, bookings, and revenue performance in one place.</p>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-light fw-semibold px-3"><i class="bi bi-download me-2"></i>Export Report</button>
                    <button class="btn btn-outline-light fw-semibold px-3"><i class="bi bi-plus-lg me-2"></i>Add Hostel</button>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-2">
            <div class="col-md-6 col-xl-3">
                <div class="glass-card stat-card p-3 p-md-4 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="stat-icon"><i class="bi bi-buildings"></i></span>
                        <span class="badge bg-success-subtle text-success-emphasis fw-semibold">+8%</span>
                    </div>
                    <p class="stat-label">Total Hostels</p>
                    <p class="stat-value">25</p>
                    <span class="stat-trend text-success"><i class="bi bi-arrow-up-right"></i> 2 added this month</span>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="glass-card stat-card p-3 p-md-4 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="stat-icon"><i class="bi bi-people"></i></span>
                        <span class="badge bg-success-subtle text-success-emphasis fw-semibold">+14%</span>
                    </div>
                    <p class="stat-label">Registered Users</p>
                    <p class="stat-value">120</p>
                    <span class="stat-trend text-success"><i class="bi bi-arrow-up-right"></i> 18 new signups</span>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="glass-card stat-card p-3 p-md-4 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="stat-icon"><i class="bi bi-currency-rupee"></i></span>
                        <span class="badge bg-success-subtle text-success-emphasis fw-semibold">+10%</span>
                    </div>
                    <p class="stat-label">Monthly Revenue</p>
                    <p class="stat-value">₹15,000</p>
                    <span class="stat-trend text-success"><i class="bi bi-arrow-up-right"></i> Better than last month</span>
                </div>
            </div>

            <div class="col-md-6 col-xl-3">
                <div class="glass-card stat-card p-3 p-md-4 h-100">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="stat-icon"><i class="bi bi-door-open"></i></span>
                        <span class="badge bg-warning-subtle text-warning-emphasis fw-semibold">76% Full</span>
                    </div>
                    <p class="stat-label">Occupancy</p>
                    <p class="stat-value">76%</p>
                    <span class="stat-trend text-warning"><i class="bi bi-dash-circle"></i> 8 rooms available</span>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-1">
            <div class="col-lg-7">
                <div class="glass-card p-4 h-100">
                    <h3 class="section-title"><i class="bi bi-bar-chart-line me-2 text-primary"></i>Performance Sections</h3>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="fw-semibold">Hostel Occupancy</span>
                            <span class="text-muted fw-semibold">76%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 76%;"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="fw-semibold">Rent Collection</span>
                            <span class="text-muted fw-semibold">64%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 64%;"></div>
                        </div>
                    </div>

                    <div>
                        <div class="d-flex justify-content-between mb-2">
                            <span class="fw-semibold">Maintenance Completion</span>
                            <span class="text-muted fw-semibold">88%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 88%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="glass-card p-4 h-100">
                    <h3 class="section-title"><i class="bi bi-lightning-charge me-2 text-primary"></i>Quick Actions</h3>

                    <div class="d-grid gap-2">
                        <a href="#" class="quick-action">
                            Add New Booking
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="#" class="quick-action">
                            Verify Pending Payments
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="#" class="quick-action">
                            Manage Rooms & Beds
                            <i class="bi bi-chevron-right"></i>
                        </a>
                        <a href="#" class="quick-action">
                            View Full Reports
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-1">
            <div class="col-12">
                <div class="glass-card p-4">
                    <h3 class="section-title"><i class="bi bi-clock-history me-2 text-primary"></i>Recent Activity</h3>
                    <div class="activity-item d-flex justify-content-between flex-wrap gap-2">
                        <div>
                            <span class="status-dot" style="background: var(--success);"></span>
                            <span class="fw-semibold">Payment received from Rahul Sharma</span>
                        </div>
                        <span class="text-muted">10 mins ago</span>
                    </div>
                    <div class="activity-item d-flex justify-content-between flex-wrap gap-2">
                        <div>
                            <span class="status-dot" style="background: var(--warning);"></span>
                            <span class="fw-semibold">Room maintenance requested in Block B</span>
                        </div>
                        <span class="text-muted">42 mins ago</span>
                    </div>
                    <div class="activity-item d-flex justify-content-between flex-wrap gap-2">
                        <div>
                            <span class="status-dot" style="background: var(--primary);"></span>
                            <span class="fw-semibold">2 new users registered on platform</span>
                        </div>
                        <span class="text-muted">Today, 09:15 AM</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>