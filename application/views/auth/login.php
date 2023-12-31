<div id="layoutAuthentication">
  <div id="layoutAuthentication_content">
    <main>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
              <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Login</h3>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" placeholder="name@example.com" />
                    <label for="email">Email address</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input class="form-control" id="password" type="password" placeholder="Password" />
                    <label for="password">Password</label>
                  </div>
                  <div class="d-flex align-items-center justify-content-end mt-4 mb-0">
                    <a class="btn btn-primary" href="index.html">Login</a>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center py-3">
                <div class="small"><a href="<?= base_url("auth/register"); ?>">Need an account? Sign up!</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>