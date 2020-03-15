<template>    
  <div id="app">
    <vue-particles class="particles" color="#f00"
        :particleOpacity="0.7"
        :particlesNumber="80"
        shapeType="circle"
        :particleSize="4"
        linesColor="#f00"
        :linesWidth="1"
        :lineLinked="true"
        :lineOpacity="0.4"
        :linesDistance="150"
        :moveSpeed="3"
        :hoverEffect="true"
        hoverMode="grab"
        :clickEffect="true"
        clickMode="push"></vue-particles>
    <mdb-navbar expand="large" dark color="stylish" class="navbar_opacity">
      <mdb-navbar-brand href="#">
        <router-link to="/" class="link_dropdown">
        <img src="../src/assets/logo_pwsz.png" class="img-fluid" alt="Responsive image" width="64">
        </router-link>
      </mdb-navbar-brand>
      <mdb-navbar-toggler>
        <mdb-navbar-nav id="nav" center>
          <router-link to="/"><mdb-nav-item href="#" active>Strona główna</mdb-nav-item></router-link>
          <router-link to="/about"><mdb-nav-item href="#">O uczelni PWSZ</mdb-nav-item></router-link>
          <mdb-dropdown tag="li" class="nav-item">
            <mdb-dropdown-toggle tag="a" navLink color="stylish" slot="toggle" waves-fixed>Paramtery powietrza</mdb-dropdown-toggle>
            <mdb-dropdown-menu>
              <router-link to="/params" class="link_dropdown">PM 1</router-link>
              <router-link to="/params" class="link_dropdown">PM 2.5</router-link>
              <router-link to="/params" class="link_dropdown">PM 10</router-link>
            </mdb-dropdown-menu>
          </mdb-dropdown>
        </mdb-navbar-nav>
      </mdb-navbar-toggler>
    </mdb-navbar>
    <transition name="router-anim">
      <router-view/>
    </transition>
  </div>
</template>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');
@import "https://cdn.jsdelivr.net/npm/animate.css@3.5.1";

#app {
  font-family: 'Montserrat', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background: url(../src/assets/bg_galaxy.png);
  min-height: 100vh;
  height: 100%;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

#nav {
  padding: 10px 30px;
}

#nav a {
  font-weight: bold;
  color: #ebebeb;
}

#nav a:hover {
  color: #42b983;
}

#nav a.router-link-exact-active {
  color: #42b983;
}

.particles {
  position: fixed;
  height: 100%;
  width: 100%;
}

.navbar_opacity {
      background-color: rgba(75, 81, 93, .8) !important;
}

.dropdown-menu {
  display: block;
  background-color: #2c3e50 !important;
}

.link_dropdown {
  display: block;
}

.router-anim-enter-active {
  animation: coming 1s;
  animation-delay: .5s;
  opacity: 0;
}
.router-anim-leave-active {
  animation: going .5s;
}

@keyframes going {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-50px);
    opacity: 0;
  }
}
@keyframes coming {
  from {
    transform: translateX(-50px);
    opacity: 0;
  }
  to {
    transform: translateX(0);
    opacity: 1;
  }
}

</style>

<script>
  import { mdbNavbar, mdbNavbarBrand, mdbNavbarToggler, mdbNavbarNav, mdbNavItem, mdbDropdown, mdbDropdownMenu, mdbDropdownToggle, mdbInput, mdbDropdownItem } from 'mdbvue';
  export default {
    name: 'App',
    components: {
      mdbNavbar,
      mdbNavbarBrand,
      mdbNavbarToggler,
      mdbNavbarNav,
      mdbNavItem,
      mdbDropdown,
      mdbDropdownMenu,
      mdbDropdownToggle,
      mdbDropdownItem,
      mdbInput
    }
  }
</script>