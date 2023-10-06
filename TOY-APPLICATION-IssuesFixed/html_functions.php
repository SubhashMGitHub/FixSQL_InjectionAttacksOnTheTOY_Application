<?php

$end_html = <<<__END
          </div>
        </div>
      </div>
      </body>
    </html>
__END;

$guest_sidebar = <<< __GUEST_SIDEBAR
    <div class="list-group">
      <a href="index.php" class="list-group-item">Home</a>
      <a href="signup.php" class="list-group-item">Signup</a>
      <a href="login.php" class="list-group-item">Login</a>
    </div>
__GUEST_SIDEBAR;

$admin_sidebar = <<< __ADMIN_SIDEBAR

    <div class="list-group">
      <a href="members.php" class="list-group-item">Manage Members</a>
      <a href="board.php" class="list-group-item">View Messages</a>
      <a href="post-message.php" class="list-group-item">Post Messages</a>
      <a href="search.php" class="list-group-item">Search Messages</a>
      <a href="logout.php" class="list-group-item">Logout</a>
    </div>

__ADMIN_SIDEBAR;

$user_sidebar = <<< __USER_SIDEBAR

    <div class="list-group">
      <a href="board.php" class="list-group-item">View Messages</a>
      <a href="post-message.php" class="list-group-item">Post Messages</a>
      <a href="search.php" class="list-group-item">Search Messages</a>
      <a href="logout.php" class="list-group-item">Logout</a>
    </div>

__USER_SIDEBAR;

$members_table_head = <<<__MEMBERS_TABLE_HEAD

<table class="table table-striped">
<thead class="thead-light">
<tr>
  <th scope="col">Username</th>
  <th scope="col">First Name</th>
  <th scope="col">Last Name</th>
  <th scope="col">Is Admin</th>
  <th scope="col">Is Active</th>
  <th scope="col">Action</th>
</tr>
</thead>
<tbody>

__MEMBERS_TABLE_HEAD;


$login_form = <<< __FORM

  <div class="card my-4">
    <h5 class="card-header">Please Sign In:</h5>
    <div class="card-body">
      <form method='post'>
        <div class="form-group">
            <input class="form-control" placeholder="Username" name="user" type="text" autofocus>
        </div>
        <div class="form-group">
            <input class="form-control" placeholder="Password" name="pass" type="password" value="">
        </div>
        <input type="hidden" name="userlogin" value="1" />
        <button type="submit" class="btn btn-primary pull-right">Sign In</button>
      </form>
    </div>
  </div>

__FORM;

$signup_form = <<< __SIGNUP_FORM

  <div class="card my-4">
    <h5 class="card-header">Please Sign Up:</h5>
    <div class="card-body">
      <form method='post'>
        <div class="form-group row">
            <label for="user" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input class="form-control" placeholder="Username" name="user" type="text" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="pass" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input class="form-control" placeholder="Password" name="pass" type="password" value="">
            </div>
        </div>
        <div class="form-group row">
            <label for="firstname" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
            <input class="form-control" placeholder="First Name" name="firstname" type="text">
            </div>
        </div>
        <div class="form-group row">
            <label for="lastname" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
            <input class="form-control" placeholder="Last Name" name="lastname" type="text">
            </div>
        </div>
        <input type="hidden" name="user_signup" value="1" />
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>
    </div>
  </div>

__SIGNUP_FORM;

$password_form = <<< __PASSWORD_FORM

  <div class="card my-4">
    <h5 class="card-header">Change Your Password:</h5>
    <div class="card-body">
      <form method='post'>
        <div class="form-group row">
            <label for="user" class="col-sm-3 col-form-label">Old Password</label>
            <div class="col-sm-9">
            <input class="form-control" placeholder="Old Password" name="old_password" type="password" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="user" class="col-sm-3 col-form-label">New Password</label>
            <div class="col-sm-9">
            <input class="form-control" placeholder="New Password" name="password" type="password">
            </div>
        </div>
        <input type="hidden" name="change_password" value="1" />
        <button type="submit" class="btn btn-primary">Change</button>
      </form>
    </div>
  </div>

__PASSWORD_FORM;

$post_form = <<< __POST_FORM

  <div class="card my-4">
    <h5 class="card-header">Post Message:</h5>
    <div class="card-body">
      <form method="post">
        <div class="form-group">
          <textarea name="message_text" class="form-control" rows="6"></textarea>
        </div>
        <input type="hidden" name="post_message" value="1" />
        <button type="submit" class="btn btn-primary">Post</button>
      </form>
    </div>
  </div>

__POST_FORM;

$search_form = <<< __SEARCH_FORM

  <div class="row">
      <form method="get">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." name="q">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit">Go!</button>
        </span>
      </div>
      </form>
  </div>

__SEARCH_FORM;
