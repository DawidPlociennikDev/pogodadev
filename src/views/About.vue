<template>
  <div class="container pb-5">
    <div class="about">
      <div class="about_inner">
        <h4>
          Wydział <span class="special-text">Nauk Technicznych i Ekonomicznych</span> kształci studentów na kierunkach:
          <ul class="special-ul">
            <li class="special-dot">studia pierwszego stopnia</li>
            <li class="special-dot">Finanse, rachunkowość i podatki</li>
            <li class="special-dot">Informatyka</li>
            <li class="special-dot">Inżynieria testowa</li>
            <li class="special-dot">Zarządzanie</li>
            <li class="special-dot">Zarządzanie i inżynieria produkcji</li>
            <li class="special-dot">Logistyka i transport</li>
            <li class="special-dot">Energetyka</li>
          </ul>
        </h4>

        <h4>
          Studia <span class="special-text">drugiego</span> stopnia:
          <ul class="special-ul">
            <li class="special-dot">Finanse i zarządzanie w przedsiębiorstwie</li>
          </ul>
        </h4>

        <h4>
          Absolwenci kierunków Zarządzanie oraz Finanse rachunkowość i podatki  otrzymują tytuł licencjata po sześciu semestrach nauki. 
        </h4>

        <h4>
          Absolwenci kierunków Informatyka, Zarządzanie i inżynieria produkcji, Inżynieria testowa, Logistyka i transport oraz Energetyka otrzymują tytuł inżyniera po siedmiu semestrach nauki. 
        </h4>

        <h4>
          Absolweci kierunku Finase i zarządzanie w przedsiębiorstwie otrzymują tytuł magistra po czterech semestrach nauki.
        </h4>

        <h4>
          Ponadto prowadzone są studia podyplomowe oraz wykłady w ramach Uniwersytetu Trzeciego Wieku.
        </h4>


      </div>
    </div>
  </div>
</template>

<style>
.container {
  margin-top: 45px;
  padding-bottom: 45px;
}

.about_inner {
    background: rgba(255,255,255, .6);
    padding: 30px;
    position: relative;
    opacity: 1;
    text-align: left;
    border-radius: 3px;
 }

.special-ul {
  list-style: none;
  margin-left: 0;
  padding-left: 0;
}

.special-dot {
  padding-left: 1em;
  text-indent: -1em;
}

.special-dot:before {
  content: "›";
  padding-right: 5px;
  color: #42b983;
}

.special-text {
  font-weight: 700;
}
</style>