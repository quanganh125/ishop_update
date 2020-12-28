<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>       
<?=$this->Form->create(null, [
          'action' => 'signIn',
          'class' => 'sign-in-form']);?>        
           
  <h2 class="title">Sign in</h2>
  <div class="input-field">
    <i class="fas fa-envelope"></i>
    <input type="text" placeholder="Email" name="email" required/>
  </div>
  <div class="input-field">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password" required/>
  </div>
    <div class="forgot-password">
    <a href="#">Forgot password?</a>
  </div>
    <input type="submit" value="sign-in" class="btn solid" name="type"/>
    <p class="social-text">Or Sign in with social platforms</p>
  <div class="social-media">
      <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
  </div>
<?= $this->Form->end(); ?>
      

<?=$this->Form->create(null, [
          'action' => 'add',
          'class' => 'sign-up-form']); ?>
    
  <h2 class="title">Sign up</h2>
  <div class="input-field">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="name" required/>
  </div>
  <div class="input-field">
    <i class="fas fa-envelope"></i>
    <input type="email" placeholder="Email" name="email" required/>
  </div>
  <div class="input-field">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password" required/>
	</div>
  <div class="input-field">
    <i class="fas fa-phone"></i>
    <input type="text" placeholder="PhoneNumber" name="phonenumber" required/>
  </div>
  <input type="submit" class="btn" value="sign-up" name="type"/>
  <p class="social-text">Or Sign up with social platforms</p>
  <div class="social-media">
    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
  </div>
<?= $this->Form->end(); ?>