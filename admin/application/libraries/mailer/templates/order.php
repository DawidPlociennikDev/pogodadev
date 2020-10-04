<style>
    @media screen {
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    }
</style>
<section style="max-width: 75%; margin: 0 auto; font-family: 'Montserrat', sans-serif;">
	<div style="text-align: center; margin-top: 30px;">
		<img src="{base_url}uploads/{logo}" width="115">
		<div style="text-transform: uppercase; margin: 20px auto; font-size: 32px; font-family: 'Garamond'">dziękujemy za zakupy</div>
		<div style="font-size: 1.2rem">Numer Twojego zamówienia <strong>{id}</strong></div>
	</div>
	<hr style="margin: 30px auto; border-bottom-color: #dfdfdf; border-top-color: transparent;">
	<div style="display:flex; max-width: 80%; margin: 0 auto;">
		<div style="width: 65%; font-weight: 500; font-size: 1rem">
			<p style="margin-bottom: 5px;">DATA ZAMÓWIENIA:</p>
			{address_label}
		</div>
		<div style="width: 35%; font-weight: 500; font-size: 1rem;">
			<p style="margin-bottom: 5px;">{created}</p>
			{address}
			{city_delivery}
		</div>
	</div>
	{bank_account}
	<hr style="margin: 40px auto; border-bottom-color: #dfdfdf; border-top-color: transparent;">
		{cart}
	<hr style="margin: 40px auto; border-bottom-color: #dfdfdf; border-top-color: transparent;">
	<div style="display:flex; max-width: 80%; margin: 0 auto;">
		<div style="width: 65%; font-weight: 500; font-size: 1rem;">
			STATUS ZAMÓWIENIA:<br>
			METODA PŁATNOŚĆI:<br>
			SPOSÓB DOSTAWY:<br>
			KWOTA DOSTAWY:<br>
			SUMA ZAMÓWIENIA:<br>
		</div>
		<div style="width: 35%; font-weight: 500; font-size: 1rem; text-transform: uppercase;">
			{payment_status}<br>
			{paymentType}<br>
			{delivery_name}<br>
			{delivery_cost} {currency}<br>
			{rl_suma}
			{suma} {currency}<br>
		</div>
	</div>
	{payu}
	<hr style="margin: 40px auto; border-bottom-color: #dfdfdf; border-top-color: transparent;">
	<div style="margin: 0 auto; text-align: center;">{dpd_shipment}</div>
	<div style="display:flex; max-width: 80%; margin: 0 auto;">
		<div style="width: 65%;">
			<div style="display: flex">
				<div style="margin-right: 20px;">
					<img src="{base_url}assets/front/img/email/order-confirmation.png">
				</div>
				<div>
					<div style="font-weight: 500; font-size: 1.2rem;">Pielęgnacja obuwia</div>
					<div style="font-size: 1rem;">Sprawdź nasz poradnik.</div>
					<a href="{base_url}poradnik/pielegnacja-obuwia/4" style="padding: 10px 25px; border: 1px solid black; text-decoration: none; font-size: 12px; letter-spacing: 4px; display: inline-block; margin-top: 15px; color: #000;">PORADNIK</a>
				</div>
			</div>
		</div>
		<div style="width: 35%;">
			<div style="display: flex">
				<div style="margin-right: 20px;">
					<img src="{base_url}assets/front/img/email/order-confirmation_2.png">
				</div>
				<div>
					<div style="font-weight: 500; font-size: 1.2rem;">Potrzebujesz pomocy?</div>
					<div style="font-size: 1rem;">Skontaktuj się z nami.</div>
					<a href="{base_url}kontakt" style="padding: 10px 25px; border: 1px solid black; text-decoration: none; font-size: 12px; letter-spacing: 4px; display: inline-block; margin-top: 15px; color: #000;">KONTAKT</a>
				</div>
			</div>
		</div>
	</div>
	<hr style="margin: 40px auto; border-bottom-color: #dfdfdf; border-top-color: transparent;">
	<div style="text-align: center; margin-top: 30px; margin-bottom: 30px;">
		<div style="font-weight: 700; font-size: 28px;">Obserwuj nas!</div>
		<div style="display:flex; margin-top: 30px; justify-content: center;">
			<div style="padding: 15px 10px; margin-left: auto;">
				<a href="{fb}">
					<img src="{base_url}assets/front/img/email/fb.png" width="48">
				</a>
			</div>
			<div style="padding: 15px 10px; margin-right: auto;">
				<a href="{inst}">
					<img src="{base_url}assets/front/img/email/inst.png" width="48">
				</a>
			</div>
		</div>
	</div>
</section>