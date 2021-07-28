<template>
<div class="bo" style=" background-image:linear-gradient(#00000040, #000000bf), url('assets/22.jpg');">

<div class="log">
<img src="assets/woll.png" alt="" srcset="">
</div>
<div class="text-container">
  <span>W</span>
  <span>E</span>
  <span>L</span>
  <span>C</span>
  <span>o</span>
  <span>m</span>
  <span>e</span>
</div>
<br>
<div class="container">

  <div v-if="canLogin"  >
    <inertia-link
      v-if="$page.props.user"
      href="/dashboard"
      class="text-sm button text-gray-700 underline"
    >
      Dashboard
    </inertia-link>

    <template v-else>
      <inertia-link
        :href="route('login')"
        class="text-sm button text-gray-700 underline"
      >
        Log in
      </inertia-link>

      <inertia-link
        v-if="canRegister"
        :href="route('register')"
        class="ml-4 text-sm button text-gray-700 underline"
      >
        Register
      </inertia-link>
    </template>
  </div>

</div>

  </div>
</template>

<style scoped>
@import url('https://fonts.googleapis.com/css?family=Baloo+Thambi');
.container{
     display: flex;
     justify-content: center;
     align-items: center;
}
.log{
  display: flex;
     justify-content: center;
     align-items: center;
       animation: MoveUpDown 1s linear 10;
  position: relative;
}
@keyframes MoveUpDown {
  0%, 100% {
    bottom: 0;
  }
  50% {
    bottom: 10px;
  }
}
.container .button{
  width:25%;
  border:none;
  border-radius: 10px;
  background:none;
  padding:1rem 2rem;
  color: #FFF;
    font-family: 'Baloo Thambi', cursive;
  transition: 0.5s ease-in-out;
  border:2px solid #03d9ff;
}
.container .button:hover{
  background:#03d9ff;
  box-shadow: 1px 5px 30px #03d9ff;
  color: #2b0124;
}
.bo {
     height: 100vh;
     background-repeat: no-repeat;
     background-size: cover;
     background-position:center;
    
    
}

 .text-container{
    display: flex;
     justify-content: center;
     align-items: center;
 }
.text-container > span {
  
  text-transform: uppercase;
  animation: glow 2s ease-in-out infinite;
  font-size: 3rem;
  font-family: 'Baloo Thambi', cursive;
    font-size: 7rem;
  font-weight: 10rem;
}

@keyframes glow {
  0%, 100% {
    color: #FFF;
    text-shadow: 0 0 10px #0652DD, 0 0 50px #0652DD, 0 0 100px #0652DD;
  }
  
  10%, 90% {
    color: #858585;
    text-shadow: none;
  }
}

.text-container > span:nth-child(2) {
	animation-delay: 0.25s;
}

.text-container > span:nth-child(3) {
	animation-delay: 0.5s;
}

.text-container > span:nth-child(4) {
	animation-delay: 0.75s;
}

.text-container > span:nth-child(5) {
	animation-delay: 1s;
}

.text-container > span:nth-child(6) {
	animation-delay: 1.25s;
}

.text-container > span:nth-child(7) {
	animation-delay: 1.5s;
}
</style>

<script>
export default {
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
};
</script>
