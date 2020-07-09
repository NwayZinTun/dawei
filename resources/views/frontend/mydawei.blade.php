@extends('frontend.master')

@section('content')
	<!-- For Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('frontendtemplate/images/carousel1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontendtemplate/images/carousel2.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontendtemplate/images/carousel9.jpg')}}" class="d-block w-100" alt="...">
    </div>
</div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End of Carousel -->

<div class="container mt-5">
	<div class="shadow-lg p-3 mb-5 bg-white rounded">
		<h1 class="text-center"> About Dawei </h1>
		<p>
			Dawei formerly known as Tavoy, is a city located in south-eastern Myanmar and is the capital of the Tanintharyi Region, about 614.3 km (381.7 miles) south of Yangon. Population is 146946 (estimates).
		</p>
		<p>
			There are many historical places in Dawei. Despite having lesser historical and archaeological evidences, nine pagodas under titles of Shin where people from various regions of the nation make pilgrimage tours have been famous due to successive preservations.The list of nine pagodas comprises Shin Tauk Htein and Shin Mokhtee as Buddha images and remaining sevens as pagodas. Shin Pin Khayu, Shin Mokhtee, Shin Okaw and Shin Datwe are situated in Dawei Township, Shin Hmyaw Taung, Shin Tauk Htein and Shin Zalun in Launglon Township, Shin Taunt Pon in Thayetchaung Township and Shin Hsandaw in Yebyu Township.
			Depending on the locations, people mark nine pagodas under titles of Shin on three hills, in three jungles and three towns. The pagodas on three hills are Shin Hsandaw, Shin Hmyaw Taung and Shin Taunt Pon, in three jungles Shin Datwe, Shin Zalun and Shin Tauk Htein, and in three towns Shin Pin Khayu, Shin Okaw and Shin Mokhtee. They all can be noted as “three jungles, mountains and towns each, note down as nine Shins”.

		</p>
		<p>
			If you are someone who likes travelling, I think that you should visit to Dawei. In the summer, you can go to the beaches and can feel the sunshine. In the rainy season, you can go to the waterfalls and feel the nature.
		</p>
	</div>

	<h1 class="text-center"> Gallery </h1>
	<hr>
	<div class="row">
		<div class="col-lg-6">
			<div class="shadow-lg p-3 mb-5 bg-white rounded">
				<h2> Traditional Foods </h2>
				<div class="row mt-5">
					<div class="col-lg-3">
						<img src="{{asset('frontendtemplate/images/moke_let_thoke.jpg')}}" class="d-block" alt="..." style="width: 100px; height: 100px;">
					</div>
					<div class="col-lg-3">
						Moke Let Thoke
					</div>
					<div class="col-lg-3">
						<img src="{{asset('frontendtemplate/images/moke_hen_khar.jpg')}}" class="d-block" alt="..." style="width: 100px; height: 100px;">
					</div>
					<div class="col-lg-3">
						Moke Hen Khar
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-lg-3">
						<img src="{{asset('frontendtemplate/images/moke_pyar1.jpg')}}" class="d-block" alt="..." style="width: 100px; height: 100px;">
					</div>
					<div class="col-lg-3">
						Moke Pyar
					</div>
					<div class="col-lg-3">
						<img src="{{asset('frontendtemplate/images/kyet_u_moke_late.jpg')}}" class="d-block" alt="..." style="width: 100px; height: 100px;">
					</div>
					<div class="col-lg-3">
						Kyet U Moke Late
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-lg-3">
						<img src="{{asset('frontendtemplate/images/moke_lin_mayar.jpg')}}" class="d-block" alt="..." style="width: 100px; height: 100px;">
					</div>
					<div class="col-lg-3">
						Moke Lin Mayar
					</div>
					<div class="col-lg-3">
						<img src="{{asset('frontendtemplate/images/moke_oo_hnouk.jpg')}}" class="d-block" alt="..." style="width: 100px; height: 100px;">
					</div>
					<div class="col-lg-3">
						Moke Oo Hnouk
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="shadow-lg p-3 mb-5 bg-white rounded">
				<h2> Traditional Costume </h2>
				<div class="row mt-5">
					<div class="col-lg-6">
						<img src="{{asset('frontendtemplate/images/dawei_costume1.jpg')}}" class="d-block" alt="..." style="width: 210px; height: 200px;">
					</div>
					<div class="col-lg-6">
						<img src="{{asset('frontendtemplate/images/t_costume1.jpeg')}}" class="d-block" alt="..." style="width: 210px; height: 200px;">
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-lg-6">
						<img src="{{asset('frontendtemplate/images/t_costume3.jpg')}}" class="d-block" alt="..." style="width: 210px; height: 200px;">
					</div>
					<div class="col-lg-6">
						<img src="{{asset('frontendtemplate/images/t_costume4.jpeg')}}" class="d-block" alt="..." style="width: 210px; height: 200px;">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="shadow-lg p-3 mb-5 bg-white rounded">
				<h2 class="mb-5"> Traditional Water Pot Dance </h2>
				<iframe width="500" height="300" src="https://www.youtube.com/embed/PPsZ1adfK0U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="shadow-lg p-3 mb-5 bg-white rounded">
				<h2 class="mb-5"> Traditional Local Usage </h2>
				<div class="row">
					<div class="col-lg-6">
						<ol>
							<li>ဟုတ်ကဲ့ခင်ဗျား</li>
							<li>ဟုတ်ကဲ့ရှင်</li>
							<li>ဘာပြောတာလဲ</li>
							<li>အိပ်ပျော်ရဲ့လား</li>
							<li>ခေါင်းမူးတယ်</li>
							<li>ဘယ်လိုသွားရမလဲ</li>
							<li>‌မြန်လှချည်လား</li>
							<li>ထမင်းစားပြီးပြီလား</li>
							<li>ထမင်းဆိုင်ဘယ်မှာလဲ</li>
							<li>‌ဒီနေ့</li>
							<li>မနက်ဖြန်</li>
							<li>သဘက်ခါ</li>
						</ol>
					</div>
					<div class="col-lg-6">
						<ol>
							<li>ခံဗျား</li>
							<li>အာဂရှင်</li>
							<li>ဖျားပြောနူး</li>
							<li>အိမွိဘဲ့လော်</li>
							<li>ခေါန်းဝေဟှယ်</li>
							<li>ဖယ်မျိုးသွားရမယ်နူး</li>
							<li>ဗြန်ဇမား</li>
							<li>မှန်းစားပီးဘီလား</li>
							<li>မှန်းဆိုင်ဟယ်မာနူး</li>
							<li>‌အယ်နေ့</li>
							<li>နတ်ကီးတိုင်</li>
							<li>နတ်ကီးဖတ်</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
@endsection