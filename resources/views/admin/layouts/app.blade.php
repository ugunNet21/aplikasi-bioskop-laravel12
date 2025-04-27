<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('admin.includes.styles')
</head>
<body>
    <!-- Sidebar -->
    @include('admin.includes.sidebar')

    <!-- Main Content -->
    <div class="main-content">
        <!-- Navbar -->
        @include('admin.includes.navbar')

        <!-- Dashboard Section -->
        @yield('content')

        <!-- Users Section -->
        <section id="users" class="mt-4 d-none">
            <h2>Manage Users</h2>
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User</button>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Full Name</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dynamic content here -->
                            <tr>
                                <td>UUID</td>
                                <td>user@example.com</td>
                                <td>John Doe</td>
                                <td>customer</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Cinemas Section -->
        <section id="cinemas" class="mt-4 d-none">
            <h2>Manage Cinemas</h2>
            <button class="btn btn-primary mb-3">Add Cinema</button>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>City</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dynamic content here -->
                            <tr>
                                <td>UUID</td>
                                <td>Cinema XXI</td>
                                <td>Jakarta</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Studios Section -->
        <section id="studios" class="mt-4 d-none">
            <h2>Manage Studios</h2>
            <button class="btn btn-primary mb-3">Add Studio</button>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cinema</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Capacity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dynamic content here -->
                            <tr>
                                <td>UUID</td>
                                <td>Cinema XXI</td>
                                <td>Studio 1</td>
                                <td>regular</td>
                                <td>100</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Movies Section -->
        <section id="movies" class="mt-4 d-none">
            <h2>Manage Movies</h2>
            <button class="btn btn-primary mb-3">Add Movie</button>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Genre</th>
                                <th>Rating</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dynamic content here -->
                            <tr>
                                <td>UUID</td>
                                <td>Sample Movie</td>
                                <td>Action</td>
                                <td>13+</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Showtimes Section -->
        <section id="showtimes" class="mt-4 d-none">
            <h2>Manage Showtimes</h2>
            <button class="btn btn-primary mb-3">Add Showtime</button>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Movie</th>
                                <th>Studio</th>
                                <th>Showtime</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dynamic content here -->
                            <tr>
                                <td>UUID</td>
                                <td>Sample Movie</td>
                                <td>Studio 1</td>
                                <td>2025-04-28 19:00</td>
                                <td>Rp 50,000</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Seats Section -->
        <section id="seats" class="mt-4 d-none">
            <h2>Manage Seats</h2>
            <button class="btn btn-primary mb-3">Add Seat</button>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Studio</th>
                                <th>Seat Number</th>
                                <th>Type</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dynamic content here -->
                            <tr>
                                <td>UUID</td>
                                <td>Studio 1</td>
                                <td>A1</td>
                                <td>regular</td>
                                <td>Yes</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Tickets Section -->
        <section id="tickets" class="mt-4 d-none">
            <h2>Manage Tickets</h2>
            <button class="btn btn-primary mb-3">Add Ticket</button>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Showtime</th>
                                <th>Seat</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dynamic content here -->
                            <tr>
                                <td>UUID</td>
                                <td>John Doe</td>
                                <td>Sample Movie</td>
                                <td>A1</td>
                                <td>confirmed</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Payments Section -->
        <section id="payments" class="mt-4 d-none">
            <h2>Manage Payments</h2>
            <button class="btn btn-primary mb-3">Add Payment</button>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ticket</th>
                                <th>Amount</th>
                                <th>Method</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dynamic content here -->
                            <tr>
                                <td>UUID</td>
                                <td>Ticket UUID</td>
                                <td>Rp 50,000</td>
                                <td>credit_card</td>
                                <td>completed</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Promotions Section -->
        <section id="promotions" class="mt-4 d-none">
            <h2>Manage Promotions</h2>
            <button class="btn btn-primary mb-3">Add Promotion</button>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Code</th>
                                <th>Discount</th>
                                <th>Valid Until</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dynamic content here -->
                            <tr>
                                <td>UUID</td>
                                <td>DISCOUNT10</td>
                                <td>10%</td>
                                <td>2025-12-31</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Ticket Promotions Section -->
        <section id="ticket-promotions" class="mt-4 d-none">
            <h2>Manage Ticket Promotions</h2>
            <button class="btn btn-primary mb-3">Add Ticket Promotion</button>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Ticket ID</th>
                                <th>Promotion ID</th>
                                <th>Applied At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dynamic content here -->
                            <tr>
                                <td>UUID</td>
                                <td>UUID</td>
                                <td>2025-04-27 10:00</td>
                                <td>
                                    <button class="btn btn-sm btn-warning">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Example Modal for Adding User -->
        @include('admin.includes.modal')
    </div>

    <!-- Bootstrap JS -->
    @include('admin.includes.scripts')
</body>
</html>