@extends('layout')

@section('title', 'Services')

@section('content')

         <!-- Start Page Title Area -->
        <div class="page-title-area item-bg6 jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-title-content">
                    <h2>Blog</h2>
                    <p>Our Latest News</p>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Blog Area -->
		<section class="blog-area ptb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
					@forelse($posts as $post)
						<div class="single-blog-post">
							<div class="blog-image">
								<a href="">
									<img src="assets/img/home-six/compliance.png" alt="image">
								</a>
								<div class="date">
									<i class="far fa-calendar-alt"></i>  April 29, 2025
								</div>
							</div>

							<div class="blog-post-content">
								<h3><a href="{{ route('blog.post', $post->slug) }}">{{ $post->title }}</a></h3>

								<span>by <a href="#">{{ $post->author->name ?? 'Unknown' }}</a></span>

								<p>
								{!! Str::limit(strip_tags($post->content), 150) !!} 
                                </p>

								<a href="single-blog-1.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
						@empty
						<p>No posts available.</p>
					@endforelse
					</div>
					

					<!-- <div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="blog-image">
								<a href="single-blog-2.html">
									<img src="assets/img/home-six/why.png" alt="image">
								</a>

								<div class="date">
									<i class="far fa-calendar-alt"></i> April 29, 2025
								</div>
							</div>

							<div class="blog-post-content">
								<h3><a href="single-blog-2.html">Why Your Business Needs a Chartered Accountant—Now More Than Ever</a></h3>

								<span>by <a href="#">Yemi Odebunmi</a></span>

								<p>Running a business is demanding, and keeping track of your finances is critical to long-term success.
                                     Whether you’re a startup, a nonprofit, or a multinational, a Chartered Accountant brings more than just number-crunching—they  
                                    deliver strategic insight, compliance peace of </p>

								<a href="single-blog-2.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div> -->

                    <!-- <div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="blog-image">
								<a href="single-blog-3.html">
									<img src="assets/img/home-six/tax1.png" alt="image">
								</a>

								<div class="date">
									<i class="far fa-calendar-alt"></i> April 29, 2025
								</div>
							</div>

							<div class="blog-post-content">
								<h3><a href="single-blog-3.html">Tax Planning vs. Tax Evasion—Know the Difference</a></h3>

								<span>by <a href="#">Yemi Odebunmi</a></span>

								<p>Many business owners confuse smart tax planning with tax evasion, but the line between legal and illegal can’t be blurred. This blog clarifies both terms, 
                                    explains the consequences of non-compliance, and shows how proper tax advisory can keep you compliant while still saving money.</p>

								<a href="single-blog-3.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
                    </div> -->

                    <!-- <div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="blog-image">
								<a href="single-blog-4.html">
									<img src="assets/img/blog-image/6.jpg" alt="image">
								</a>

								<div class="date">
									<i class="far fa-calendar-alt"></i> October 29, 2023
								</div>
							</div>

							<div class="blog-post-content">
								<h3><a href="single-blog-4.html">Explore Our Savings Plans: Gap Autosave, Gap Target, and Gap Lock</a></h3>

								<span>by <a href="#">Business Development Manager</a></span>

								<p>In today's fast-paced world, achieving financial stability and growth requires smart savings strategies tailored to your unique goals. At GAP, we offer a range of savings plans designed to meet your specific needs, whether you're looking to save effortlessly, reach a particular target, or secure your funds for a set period. Explore our three premier savings plans: Gap Autosave, Gap Target, and Gap Lock, and discover how they can help you achieve your financial dreams.
								<a href="single-blog-4.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
                    </div>

					<div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="blog-image">
								<a href="single-blog-5.html">
									<img src="assets/img/blog-image/5.jpg" alt="image">
								</a>

								<div class="date">
									<i class="far fa-calendar-alt"></i> October 29, 2023
								</div>
							</div>

							<div class="blog-post-content">
								<h3><a href="single-blog-5.html">Maximize Your Savings with High-Interest Accounts</a></h3>

								<span>by <a href="#">Kehinde Adejuwon</a></span>

								<p>High-interest accounts offer an excellent opportunity to grow your savings through the power of compound interest. By understanding how interest is calculated and compounded, you can make informed decisions and maximize your financial returns. Explore our high-interest savings account options at GAP and start growing your savings today!


								<a href="single-blog-5.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="blog-image">
								<a href="single-blog-6.html">
									<img src="assets/img/blog-image/4.jpg" alt="image">
								</a>

								<div class="date">
									<i class="far fa-calendar-alt"></i> October 29, 2023
								</div>
							</div>

							<div class="blog-post-content">
								<h3><a href="single-blog-6.html">Elevate Your Financial Future: The Power of Gap Savings</a></h3>

								<span>by <a href="#">Business Development Manager</a></span>

								<p>In the realm of financial empowerment, Gap Savings emerges as a beacon, offering not just a place to stash money, but a dynamic platform designed to elevate your financial future.</p>

								<a href="single-blog-6.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div> -->

					<!-- <div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="blog-image">
								<a href="single-blog.html">
									<img src="assets/img/blog-image/5.jpg" alt="image">
								</a>

								<div class="date">
									<i class="far fa-calendar-alt"></i> September 17, 2021
								</div>
							</div>

							<div class="blog-post-content">
								<h3><a href="single-blog.html">10 Tips To Reduce Your Card Processing Costs</a></h3>

								<span>by <a href="#">admin</a></span>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

								<a href="single-blog.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div> -->

					<!-- <div class="col-lg-4 col-md-6">
						<div class="single-blog-post">
							<div class="blog-image">
								<a href="single-blog.html">
									<img src="assets/img/blog-image/6.jpg" alt="image">
								</a>

								<div class="date">
									<i class="far fa-calendar-alt"></i> September 19, 2021
								</div>
							</div>

							<div class="blog-post-content">
								<h3><a href="single-blog.html">PayPal Here Card Reader Review 2021</a></h3>

								<span>by <a href="#">admin</a></span>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>

								<a href="single-blog.html" class="read-more-btn">Read More <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
                    </div> -->
                    
                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <span class="page-numbers current" aria-current="page">2</span>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
				</div>
			</div>
		</section>
        <!-- End Blog Area -->

        <!-- Start Account Create Area -->
        <!-- <section class="account-create-area">
            <div class="container">
                <div class="account-create-content">
                    <h2>Apply for an account in minutes</h2>
                    <p>Get your Gap account today!</p>
                    <a href="login.html" class="btn btn-primary">Get Your Gap Account</a>
                </div>
            </div>
        </section> -->
        <!-- End Account Create Area -->
        
        

        @endsection
