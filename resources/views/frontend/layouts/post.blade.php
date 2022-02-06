
<section id="blog" class="section blog-area ptb_100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Section Heading -->
            <div class="col-12 col-md-10 col-lg-6">
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2 class="text-capitalize">Financial News</h2>
                    <p class="d-none d-sm-block mt-4">Online payment gateways cannot accept money directly from a bank account if it is not connected with debit-credit card/internet banking.</p>
                    <p class="d-block d-sm-none mt-4">Current online banking system is highly dependent on NPSB by Bangladesh Bank (Not all the banks are connected yet)</p>
                </div>
            </div>
        </div>
        <div class="row">
@foreach($recentPosts as $post)
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Single Blog -->
                <div class="single-blog wow fadeIn res-margin" data-wow-duration="2s">
                    <!-- Blog Thumb -->
                    <div class="blog-thumb">
                        <a href="{{ route('frontend.layouts.blogpost',['slug'=>$post->slug]) }}"><img src="{{$post->image}}" alt="Image" class="img-fluid rounded"></a>
                    </div>
                    <!-- Blog Content -->
                    <div class="blog-content p-4">
                        <!-- Meta Info -->
                        <span class="post-category text-white bg-secondary mb-3">{{ $post->category->name }}</span>
                        <ul class="meta-info d-flex justify-content-between">
                            <li>By <a href="{{ route('frontend.layouts.blogpost',['slug'=>$post->slug]) }}">{{$post->user->name }}</a></li>
                            <li>{{$post->created_at->format('d M, Y')}}</li>
                        </ul>
                        <!-- Blog Title -->
                        <h4 class="blog-title my-3"><a href="{{ route('frontend.layouts.blogpost',['slug'=>$post->slug]) }}">{{$post->title}}</a></h4>
                  <!-- <p>{{Str::limit ($post->description,100) }}</p> -->

                        <p><a href="{{ route('frontend.layouts.blogpost',['slug'=>$post->slug]) }}">Read More</a></p>
                    </div>

                </div>
            </div>
                @endforeach
            </div>
            </div>

</section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            type: 'GET',
            url: 'https://blog.eps.com.bd/wp-json/wp/v2/posts?per_page=3&orderby=id',

            success: function (data) {
                var posts_html = '';

                $.each(data, function (index, post) {


                    posts_html +=  '<img  src="' + post.yoast_head_json.og_image[0].url + '" alt="activity-6"></div>';
                    posts_html += '<p>' + post.yoast_head_json.twitter_misc["Written by"] + '</p>';
                    posts_html += '<a href="' + post.link + '"><h3>' + post.title.rendered + '</h3></a>';
                    posts_html += '<p>' + post.excerpt.rendered + '</p>';
                });
                $('#posts').html(posts_html);

            },


            error: function (request, status, error) {
                alert(error);
            }
        });
    });
</script>
