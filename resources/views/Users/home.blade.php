<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script> -->
    <title>Adam Shoppe</title>
</head>
<body>
    <div class="super_container">
	<!--header-->
	@include('Users.template.header')
	<!--header-->

		<div class="container mt-5 mb-5">
		<div class="d-flex justify-content-center row">
			<div class="col-md-10">
                @foreach ($products as $product)
                {{-- <h5>{{$products->firstItem()+$loop->index}}</h5> --}}
				<div class="row p-2 bg-white border rounded">
					<div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="{{url('storage/images/'.$product->image)}}" width="100" height="100"/></div>
					<div class="col-md-6 mt-1">
						<h5>{{$product->name}}</h5>
						<div class="d-flex flex-row">
							<div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
						</div>
						<div class="mt-1 mb-1 spec-1"><span>{{number_format($product->price,2)}}</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
						<div class="mt-1 mb-1 spec-1"><span>{{$product->status_text}}</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
						<p class="text-justify text-truncate para mb-0">{{$product->is_favourite_text}}<br><br></p>
					</div>
					<div class="align-items-center align-content-center col-md-3 border-left mt-1">
						<div class="d-flex flex-row align-items-center">
							<h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
						</div>
						<h6 class="text-success">Free shipping</h6>
						<div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to Cart</button></div>
					</div>
				</div>
                @endforeach
			</div>
            <div class="card-footer clearfix">
                {{$products->links()}}
            </div>
		</div>
	</div>
	</div>

	<!--footer-->
	@include('Users.template.footer')
	<!--footer-->

</body>
</html>
