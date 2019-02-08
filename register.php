<?php require_once 'partials/_header.php'; ?>

  <div class="container login-page">
    <form class="form-signin text-center">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.2/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Create your account</h1>
      <label for="inputUser" class="sr-only">User name</label>
      <input type="text" id="inputUser" class="form-control" placeholder="User name" required>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <label for="inputPhoto" class="sr-only">User photo</label>
      <input type="file" id="inputPhoto" class="form-control" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </form>
  </div>
  
<?php require_once 'partials/_footer.php'; ?>