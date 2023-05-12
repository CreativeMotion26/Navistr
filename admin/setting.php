<!doctype html>
<html lang="en">
<head>
    <?php require __DIR__ . '/../inc/head.inc.php';?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet">
</head>
<body>
    <?php require __DIR__ . '/inc/sidebar.inc.php';?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
            <h2>User Settings</h2>
            <form>
                <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                <label for="sex">Sex</label>
                <select class="form-control" id="sex">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
                </div>
                <div class="form-group">
                <label for="joinedDate">Joined Date</label>
                <input type="text" class="form-control" id="joinedDate" placeholder="Enter Joined Date">
                </div>
                <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-lg-8 mx-auto">
            <h2>Change Password</h2>
            <form>
                <div class="form-group">
                <label for="currentPassword">Current Password</label>
                <input type="password" class="form-control" id="currentPassword" placeholder="Enter Current Password">
                </div>
                <div class="form-group">
                <label for="newPassword">New Password</label>
                <input type="password" class="form-control" id="newPassword" placeholder="Enter New Password">
                </div>
                <div class="form-group">
                <label for="confirmNewPassword">Confirm New Password</label>
                <input type="password" class="form-control" id="confirmNewPassword" placeholder="Confirm New Password">
                </div>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-lg-8 mx-auto">
            <h2>View Other Admin</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adminModal">
                View Admin
            </button>
            </div>
        </div>
        
        </div>

<!-- Modal -->
        <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="adminModalLabel" aria-hidden="
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminModalLabel">Admin Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                <li><strong>Name:</strong> John Doe</li>
                <li><strong>Email:</strong> johndoe@example.com</li>
                <li><strong>Role:</strong> Super Admin</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
    </div>
    
</body>
</html>
