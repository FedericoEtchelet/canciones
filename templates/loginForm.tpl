{include 'htmlStart.tpl'}
<div class="containerDiv">
  <form action="login" method="POST">
    <h2 class="h2Form">Login</h2>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Ingrese Su Username">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="text" class="form-control" name="password" placeholder="Ingrese su password">
    </div>
    <div class="mb-3 form-check">
      <h4>¿No tienes Una cuenta?</h4>
      <a href="home" class="aLogin">Ingresar Como Invitado</a>
    </div>
    <button type="submit" class="btn">Login</button>
  </form>
</div>

{include 'htmlEnd.tpl'}