@extends('components.view')

@section('content')
    <section class="blog-wrapper sect-pt4" id="blog">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="post-box">
                <div class="post-thumb">
                  <img src="assets/img/post-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="post-meta">
                  <h1 class="article-title">Lorem ipsum dolor sit amet consec tetur adipisicing</h1>
                  <ul>
                    <li>
                      <span class="bi bi-person"></span>
                      <a href="#">Jason London</a>
                    </li>
                    <li>
                      <span class="bi bi-tag"></span>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <span class="bi bi-chat-left-text"></span>
                      <a href="#">14</a>
                    </li>
                  </ul>
                </div>
                <div class="article-content">
                  <p>
                    Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                    porta. Quisque velit
                    nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a pellentesque
                    nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                    cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                    Nulla quis lorem ut libero malesuada feugiat.
                  </p>
                </div>
              </div>
              <div class="box-comments">
                <div class="title-box-2">
                  <h4 class="title-comments title-left">Comments</h4>
                </div>
                <ul class="list-comments">
                  <li>
                    <div class="comment-avatar">
                      <img src="assets/img/testimonial-2.jpg" alt="">
                    </div>
                    <div class="comment-details">
                      <h4 class="comment-author">Oliver Colmenares</h4>
                      <span>18 Sep 2017</span>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                        ipsam temporibus maiores
                        quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="form-comments">
                <div class="title-box-2">
                  <h3 class="title-left">
                    Leave a Reply
                  </h3>
                </div>
                <form class="form-mf">
                  <div class="row">
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message" cols="45" rows="8" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-4">
            
              <div class="widget-sidebar">
                <h5 class="sidebar-title">Recent Post</h5>
                <div class="sidebar-content">
                  <ul class="list-sidebar">
                    <li>
                      <a href="#">Atque placeat maiores.</a>
                    </li>
                    <li>
                      <a href="#">Lorem ipsum dolor sit amet consectetur</a>
                    </li>
                    <li>
                      <a href="#">Nam quo autem exercitationem.</a>
                    </li>
                    <li>
                      <a href="#">Atque placeat maiores nam quo autem</a>
                    </li>
                    <li>
                      <a href="#">Nam quo autem exercitationem.</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection