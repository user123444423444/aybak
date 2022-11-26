<html>
  <link rel="icon" type="image/x-icon" href="https://my-actual-web.phonesallowed.repl.co/assets/favicon.ico" />
<div class="container">
  <div class="drop" style="--color: #ff0f5b">
    <div class="content">
      <h2>FREE PLAN</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, vel.</p>
      <a href="#">Read More</a>
    </div>
  </div>
  <div class="drop" style="--color: #be01fe">
    <div class="content">
      <h2>STANDARD PLAN</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, vel.</p>
      <a href="#">Read More</a>
    </div>
  </div>
  <div class="drop" style="--color: #01b4ff">
    <div class="content">
      <h2>PREMIUM PLAN</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, vel.</p>
      <a href="#">Read More</a>
    </div>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.container {
  position: relative;
  width: 100%;
  min-height: 100vh;
  background: #B8B8C0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 50px;
  padding: 50px 25px;
}

.drop {
  position: relative;
  width: 350px;
  height: 350px;
  display: flex;
  justify-content: center;
  align-items: center;
  box-shadow: inset 20px 20px 20px rgba(0, 0, 0, 0.05),
    25px 35px 20px rgba(0, 0, 0, 0.05),
    25px 30px 30px rgba(0, 0, 0, 0.05),
    inset -20px -20px 25px rgba(255, 255, 255, 0.9);
  transition: 0.5s ease-in-out;
}

.drop:nth-child(1) {
  border-radius: 49% 51% 70% 30% / 30% 30% 70% 70%;
}

.drop:nth-child(2) {
  border-radius: 49% 51% 41% 59% / 52% 30% 70% 48%;
}

.drop:nth-child(3) {
  border-radius: 76% 24% 40% 60% / 40% 69% 31% 60%;
}

.drop:hover {
  border-radius: 50%;
}

.drop::before {
  content: '';
  position: absolute;
  top: 60px;
  left: 85px;
  width: 35px;
  height: 35px;
  background: #fff;
  border-radius: 50%;
  opacity: 0.5;
}

.drop::after {
  content: '';
  position: absolute;
  top: 100px;
  left: 110px;
  width: 15px;
  height: 15px;
  background: #fff;
  border-radius: 50%;
  opacity: 0.7;
}

.drop .content {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 15px;
  text-align: center;
  padding-inline: 50px;
}

.drop .content h2 {
  position: relative;
  width: 80px;
  height: 80px;
  background: #eff0f4;
  border-radius: 50%;
  box-shadow: inset 2px 5px 10px rgba(0, 0, 0, 0.1),
    inset -2px -5px 10px rgba(255, 255, 255, 1),
    15px 15px 10px rgba(0, 0, 0, 0.05),
    15px 10px 15px rgba(0, 0, 0, 0.025);
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2rem;
  color: var(--color);
}

.drop .content a {
  position: relative;
  padding: 10px 25px;
  background: var(--color);
  color: #fff;
  border-radius: 25px;
  font-weight: 500;
  text-decoration: none;
  text-shadow: 0 2px 2px rgba(0, 0, 0, 0.25);
  opacity: 0.75;
  transition: 0.5s;
}

.drop .content a:hover {
  cursor: pointer;
  opacity: 1;
}

.drop .content a::before {
  content: '';
  position: absolute;
  top: 5px;
  left: 50%;
  transform: translateX(-50%);
  width: 25%;
  height: 5px;
  background: rgba(255, 255, 255, 0.5);
  border-radius: 5px;
  transition: 0.5s;
}

.drop .content a:hover::before {
  transform: translateX(-50%) translateY(28px);
  width: 65%;
}
</style>
</html>