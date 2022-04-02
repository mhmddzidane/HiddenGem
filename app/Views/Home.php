<style>
	.heading {
		background: linear-gradient(180deg, rgba(0, 197, 151, 0.5) 0%, rgba(252, 252, 212, 0.235) 62.5%, rgba(249, 249, 249, 0.5) 97.92%);
		font-family: 'Poppins';
	}
	.container-hd {
		width: 100%;
		height: 735px;
	}
	.hd-text {
		padding: 197px 150px 26px 120px;
		float: left;
	}
	.hd-text h1 {
		font-style: normal;
		font-weight: 600;
		font-size: 65px;
		line-height: 98px;
		color: #0F9575;
	}
	.hd-text span {
		color: #44D5B2;
	}
	.hd-text h2 {
		font-style: normal;
		font-weight: 400;
		font-size: 40px;
		color: #00C597;
	}
	.input-btn-hd{
		position: relative;
		display: flex;
		flex-wrap: wrap;
	}

	.buku-tamu {
		position: relative;
		color: white;
		background-color: #DB3C6A;
		font-family: var(--main-font);
		font-weight: 700;
		font-size: 18px;
		width: 300px;
		height: 70px;
		left: -4px;
		border-radius: 8px;
		border: none;
		cursor: pointer;
		margin-top: 22px;
	}
	.submit:hover {
		background-color: var(--secondary-color);
	}
	.hd-img {
		padding: 150px 0px 26px 0px;
	}

</style>

<body>
	<div class="heading">
		<div class="container-hd">
			<div class="hd-text">
				<h1>Recommendations</h1>
				<h1>For the <span>Best Places</span></h1>
				<h2>From direct user ratings</h2>
				<div class="input-btn-hd">
					<button class="buku-tamu">Isi Buku Tamu</button>
				</div>
			</div>
			<div class="hd-img">
				<img src="<?= base_url('/img/Component 1.svg') ?>" alt="Icon-hd">
			</div>
		</div>
	</div>

</body>

</html>