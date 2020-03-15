<template>
  <mdb-container>
    <mdb-row>
      <mdb-col sm="6" class="mx-auto mt-4">
        <mdb-card class="card-image h-100 air_bg">
          <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 h-100">
            <div>
              <h5 class="light-green-text">
                <mdb-icon fab icon="asymmetrik" /> Jakość powietrza</h5>
              <mdb-card-title tag="h3" class="pt-2">
                <strong style="color: #0000ff; font-weight: 700;">Bardzo dobry</strong>
              </mdb-card-title>
              <p>
                Jakość powietrza jest dobra. Zanieczyszczenia powietrza nie stanowią zagrożenia. Warunki idealne na aktywności na zewnątrz.
              </p>
              <mdb-btn color="light-green"><mdb-icon icon="clone left" /> Czytaj więcej</mdb-btn>
            </div>
          </div>
        </mdb-card>
      </mdb-col>
      <mdb-col sm="6" class="mx-auto mt-4">
        <mdb-card class="card-image h-100 temp_bg">
          <div class="text-white h-100 text-center d-flex align-items-center rgba-black-strong py-5 px-4">
            <div>
              <h5 class="deep-orange-text">
                <mdb-icon icon="thermometer-three-quarters" /> Temperatura</h5>
              <mdb-card-title tag="h3" class="pt-2">
                <strong style="font-weight: 700;">13&deg;C</strong>
              </mdb-card-title>
              <p>
                Dane o temperaturze powietrza zbierane są przez stacje meteorologiczne. Pomiaru dokonuje się na wysokości 2 m nad gruntem za pomocą termometru, osłoniętego przed bezpośrednim promieniowaniem słonecznym w klatce meteorologicznej.
              </p>
              <mdb-btn color="deep-orange"><mdb-icon icon="clone left" /> Czytaj więcej</mdb-btn>
            </div>
          </div>
        </mdb-card>
      </mdb-col>
      <mdb-col sm="6" class="mx-auto mt-4">
        <mdb-card class="card-image wet_bg">
          <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
            <div>
              <h5 class="light-blue-text">
                <mdb-icon icon="tint" /> Wilgotność</h5>
              <mdb-card-title tag="h3" class="pt-2">
                <strong style="font-weight: 700;">82%</strong>
              </mdb-card-title>
              <p>
                Para wodna zawarta w powietrzu wskazuje prawdopodobieństwo wystąpienia opadów, rosy, mgły, przymrozków. Wyższa wilgotność zmniejsza skuteczność chłodzenia ciała przez pocenie, zmniejszając szybkość odparowywania wody ze skóry. Wilgotność powietrza jest ważnym parametrem określającym jakość powietrza w pomieszczeniach.
              </p>
              <mdb-btn color="light-blue"><mdb-icon icon="clone left" /> Czytaj więcej</mdb-btn>
            </div>
          </div>
        </mdb-card>
      </mdb-col>
    </mdb-row>
  </mdb-container>
</template>

<style>
  .rgba-black-strong, .rgba-black-strong:after {
      background-color: rgba(0,0,0,0.8);
  }
  .air_bg, .temp_bg, .wet_bg {
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .air_bg {
    background-image: url(../assets/air.jpg);
  }
  .temp_bg {
    background-image: url(../assets/temp.jpg);
  }
  .wet_bg {
    background-image: url(../assets/wet.jpg);
  }
</style>
<script>
import { mdbContainer, mdbRow, mdbCol, mdbCard, mdbCardImage, mdbCardHeader, mdbCardBody, mdbCardTitle, mdbCardText, mdbCardFooter, mdbCardUp, mdbCardAvatar, mdbCardGroup, mdbBtn, mdbView, mdbMask, mdbIcon } from 'mdbvue';

export default {
  name: 'HelloWorld',
  props: {
    msg: String
  },
	components: {
		mdbContainer,
		mdbRow,
		mdbCol,
		mdbCard,
		mdbCardImage,
		mdbCardHeader,
		mdbCardBody,
		mdbCardTitle,
		mdbCardText,
		mdbCardFooter,
		mdbCardUp,
		mdbCardAvatar,
		mdbCardGroup,
		mdbBtn,
		mdbView,
		mdbMask,
		mdbIcon
	}
}
</script>
