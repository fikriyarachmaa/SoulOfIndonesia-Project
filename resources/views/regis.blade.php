<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
@include('components.header')
<section class="bg-cream">  
<div class="h-screen bg-indigo-100 flex justify-center items-center">
	<div class="lg:w-2/5 md:w-1/2 w-2/3 pt-20">
		<form class="bg-white p-10 rounded-lg shadow-lg min-w-full ">
			<h1 class="text-green-dark font-bold text-2xl mb-1 text-center">Mari Bergabung Menjadi Penjual</h1>
			<div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="nama">Nama Pemilik Usaha :</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username" id="username" placeholder="Tulis Disini..." />
      </div>
				<div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="usaha">Nama Usaha :</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="usaha" id="usaha" placeholder="Tulis Disini..." />
      </div>
	            <div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="kontak">Nomor Kontak :</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="number" name="kontak" id="kontak" placeholder="Tulis Disini..." />
      </div>
	            <div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="alamat">Alamat Bisnis :</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="alamat" id="alamat" placeholder="Tulis Disini..." />
      </div>
	            <div>
					<label class="text-gray-800 font-semibold block my-3 text-md" for="email">Alamat Email :</label>
					<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="Tulis Disini..." />
      </div>
					<div>
						<label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password :</label>
						<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" id="password" placeholder="Konfirmasi Kata Sandi" />
      </div>
						<div>
							<label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Confirm password :</label>
							<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="confirm" id="confirm" placeholder="confirm password" />
      </div>
	  <div>
                         <label class="text-gray-800 font-semibold block my-3 text-md" for="logo_bisnis">Logo Bisnis :</label>
                         <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="file" name="logo_bisnis" id="logo_bisnis" accept="image/*" />
      </div>

							<button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
							<button type="submit" class="w-full mt-6 mb-3 bg-indigo-100 rounded-lg px-4 py-2 text-lg text-gray-800 tracking-wide font-semibold font-sans">Login</button>
		</form>
	</div>
</div>
</section>

</body>
</html>