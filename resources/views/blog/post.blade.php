@extends('layout')

@section('title', 'Services')

@section('content')


<!-- Start Page Title Area -->
<div class="page-title-area item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
    <div class="container">
        <div class="page-title-content">
            <h2>{{ $post->title }}</h2>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details">
                    <div class="article-image">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">

                    </div>
                    <div class="article-content">
                        <div class="entry-meta">
                            <ul>
                                <li><span>Posted On:</span> <a href="#">{{ $post->created_at->format('M d, Y') }}</a></li>
                                <li><span>Posted By:</span> <a href="#">{{ $post->author->name ?? 'Unknown' }}</a></li>
                            </ul>
                        </div>

                        {!! $post->content !!}
                    </div>

                    <div class="article-footer">
                        <div class="article-tags">
                            <span><i class="fas fa-bookmark"></i> Tags:</span>
                            @foreach($post->tags as $tag)
                            <a href="#">{{ $tag->name }}</a>,
                            @endforeach
                        </div>

                        <div class="article-share">
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="comments-area">
                    <h3 class="comments-title">Comments:</h3>

                    <ol class="comment-list">
                        <!-- <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="assets/img/author1.jpg" class="avatar" alt="image">
                                                <b class="fn">James Anderson</b>
                                                <span class="says">says:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time>April 24, 2021 at 10:59 am</time>
                                                </a>
                                            </div>
                                        </footer>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </article>

                                    <ol class="children">
                                        <li class="comment">
                                            <article class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="assets/img/author2.jpg" class="avatar" alt="image">
                                                        <b class="fn">Steven Smith</b>
                                                        <span class="says">says:</span>
                                                    </div>
        
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time>April 24, 2021 at 10:59 am</time>
                                                        </a>
                                                    </div>
                                                </footer>
        
                                                <div class="comment-content">
                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
        
                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </article>
                                        </li>

                                        <ol class="children">
                                            <li class="comment">
                                                <article class="comment-body">
                                                    <footer class="comment-meta">
                                                        <div class="comment-author vcard">
                                                            <img src="assets/img/author3.jpg" class="avatar" alt="image">
                                                            <b class="fn">Sarah Taylor</b>
                                                            <span class="says">says:</span>
                                                        </div>
            
                                                        <div class="comment-metadata">
                                                            <a href="#">
                                                                <time>April 24, 2021 at 10:59 am</time>
                                                            </a>
                                                        </div>
                                                    </footer>
            
                                                    <div class="comment-content">
                                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                    </div>
            
                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </article>
                                            </li>
                                        </ol>
                                    </ol>
                                </li> -->

                    </ol>

                    <div class="comment-respond">
                        <h3 class="comment-reply-title">Leave a Reply</h3>

                        <form class="comment-form">
                            <p class="comment-notes">
                                <span id="email-notes">Your email address will not be published.</span>
                                Required fields are marked
                                <span class="required">*</span>
                            </p>
                            <p class="comment-form-comment">
                                <label>Comment</label>
                                <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525"
                                    required="required"></textarea>
                            </p>
                            <p class="comment-form-author">
                                <label>Name <span class="required">*</span></label>
                                <input type="text" id="author" name="author" required="required">
                            </p>
                            <p class="comment-form-email">
                                <label>Email <span class="required">*</span></label>
                                <input type="email" id="email" name="email" required="required">
                            </p>
                            <p class="comment-form-url">
                                <label>Website</label>
                                <input type="url" id="url" name="url">
                            </p>
                            <p class="comment-form-cookies-consent">
                                <input type="checkbox" value="yes" name="wp-comment-cookies-consent"
                                    id="wp-comment-cookies-consent">
                                <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser
                                    for the next time I comment.</label>
                            </p>
                            <p class="form-submit">
                                <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
                            </p>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <aside class="widget-area" id="secondary">
                    <section class="widget widget_search">
                        <form class="search-form">
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" placeholder="Search...">
                            </label>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </section>

                    <section class="widget widget_luvion_posts_thumb">
                        <h3 class="widget-title">Popular Posts</h3>
                        @foreach($popularPosts as $popular)
                        <article class="item">
                            <a href="{{ route('blog.post', $popular->slug) }}" class="thumb">
                                <span class="fullimage cover bg1" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2023-10-29">{{ $popular->created_at->format('M d, Y') }}</time>
                                <h4 class="title usmall"><a href="{{ route('blog.post', $post->slug) }}">{{ $popular->title }}</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article>

                        <!-- <article class="item">
                            <a href="single-blog-2.html" class="thumb">
                                <span class="fullimage cover bg2" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2023-10-29">April 29, 2025</time>
                                <h4 class="title usmall"><a href="single-blog-2.html">Why Your Business Needs a
                                        Chartered Accountant—Now More Than Ever</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article>

                        <article class="item">
                            <a href="single-blog-3.html" class="thumb">
                                <span class="fullimage cover bg3" role="img"></span>
                            </a>
                            <div class="info">
                                <time datetime="2023-10-29">April 29, 2025</time>
                                <h4 class="title usmall"><a href="single-blog-3.html">Tax Planning vs. Tax Evasion—Know
                                        the Difference</a></h4>
                            </div>

                            <div class="clear"></div>
                        </article> -->
                        @endforeach
                    </section>

                    <!-- <section class="widget widget_recent_entries">
                                <h3 class="widget-title">Recent Posts</h3>

                                <ul>
                                    <li><a href="single-blog-4.html">Explore Our Savings Plans: Gap Autosave, Gap Target, and Gap Lock</a></li>
                                    <li><a href="single-blog-5.html">Maximize Your Savings with High-Interest Accounts</a></li>
                                    <li><a href="single-blog-6.html">Elevate Your Financial Future: The Power of Gap Savings</a></li>
                                </ul>
                            </section> -->

                    <!-- <section class="widget widget_archive">
                                <h3 class="widget-title">Archives</h3>

                                <ul>
                                    <li><a href="#">May 2021</a></li>
                                    <li><a href="#">April 2021</a></li>
                                    <li><a href="#">June 2021</a></li>
                                </ul>
                            </section> -->

                    <!-- <section class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>

                                <ul>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Uncategorized</a></li>
                                </ul>
                            </section> -->

                    <!-- <section class="widget widget_meta">
                                <h3 class="widget-title">Meta</h3>

                                <ul>
                                    <li><a href="#">Log in</a></li>
                                    <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                    <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                    <li><a href="#">WordPress.org</a></li>
                                </ul>
                            </section> -->

                    <section class="widget widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>
                        @foreach($post->tags as $tag)
                        <div class="tagcloud">
                            <a href="#"> {{ $tag->name }}<span class="tag-link-count"> (3)</span></a>
                            <!-- <a href="#">Business <span class="tag-link-count"> (3)</span></a>
                            <a href="#">Loan <span class="tag-link-count"> (2)</span></a>
                            <a href="#">Savings <span class="tag-link-count"> (2)</span></a> -->
                            @endforeach
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Details Area -->

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