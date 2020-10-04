<section style="background-color: #f2f2f2; padding-top: 30px; padding-bottom: 30px; ">
	<h1 style="text-align: center; font-weight: 700;">{company}</h1>
	<div style="margin: 0 auto; width: 100%; text-align: center;">
		<img src="{temp_url}{logo}" style="max-width: 100%;" width="115">
	</div>
	<h1 style="text-align: center; font-weight: 700;">Dziękujemy za złożenie zamówienia w sklepie internetowym<br><a href="{base_url}">{base_url}</a></h1>

	<div style="width: 100%; padding: 30px; font-size: 1.2rem; background-color: #fff;">
		{bank_account}
	</div>

	<div style="max-width: 85%; margin: 30px auto; font-size: 1.2rem; display: flex; border-radius: 3px; border: 1px solid #f2f2f2; background-color: #fff;">
		<div style="width: 50%; padding: 30px;">
			<p>Dane dostawy:</p>
			<p>{name}<br>{email}<br>{phone}<br>{street}<br>{zipcode}, {city}<br>{country}</p>
		</div>
		<div style="width: 50%; padding: 30px;">
			<p>Status zamówienia: <strong>{status}</strong></p>
			<p>Sposób dostawy: <strong>{delivery_name}</strong></p>
			<p>Kwota dostawy: <strong>{delivery_cost}</strong> {currency}</p>
			<p>Procent zaliczki: <strong>{procent}</strong>%</p>
			<p>Zaliczka wynosi: <strong>{price}</strong> {currency}</p>
			<p>Do zapłacenia pozostało: <strong>{topay}</strong> {currency}</p>
		</div>
	</div>

	<div style="max-width: 85%; margin: 0 auto; border-radius: 3px; border: 1px solid #f2f2f2; background-color: #fff;">
		{cart}
	</div>
	<div style="max-width: 85%; margin: 0 auto; text-align: center;">
		<h3 style="font-size: 1.4rem;">Do zapłacenia pozostało: <strong>{topay}</strong> {currency}</h3>
	</div>

</section>