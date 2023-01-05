import React from 'react'

const FormContactUs = () => {
  return (
    <>
      <section className="comment-respond contact-form wow fadeInUp" data-wow-delay="0.6s">
        <header className="header">
          <h3 id="reply-title" className="comment-reply-title">Get in touch</h3>
          <p>We will reply your message within 24 hours!</p>
        </header>
        <form action="http://twitter.staging.com/wp-comments-post.php" method="post" id="commentform" className="comment-form">
          <div className="wrap form-group">
            <div className="comment-form-author">
              <label htmlFor="author">Your name <span className="required">*</span></label>
              <input type="text" id="author" name="author" size="30" aria-required="true" placeholder="enter your name here" />
            </div>
            <div className="comment-form-email">
              <label htmlFor="email">Email address <span className="required">*</span></label>
              <input type="text" id="email" name="email" size="30" aria-required="true" placeholder="enter your email address" />
            </div>
          </div>
          <div className="wrap form-group">
            <div className="comment-form-tel">
              <label htmlFor="nmber">Phone number <span className="required">*</span></label>
              <input type="tel" id="nmber" name="tel" placeholder="Phone number" size="30" />
            </div>
            <div className="comment-form-url">
              <label htmlFor="url">Website <span className="text-light">(Optional)</span></label>
              <input type="text" id="url" name="url" size="30" defaultValue="http://" />
            </div>
          </div>
          <div className="comment-form-comment">
            <label htmlFor="comment">Message * <span className="required">*</span></label>
            <textarea id="comment" name="comment" rows="3" cols="72" aria-required="true" placeholder="Write your message here"></textarea>
          </div>
          <p className="form-allowed-tags hidden">You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a
            href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt;
            &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del
            datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt;
            &lt;strong&gt; </code></p>
          <div className="form-submit">
            <input type="submit" name="submit" id="submit" defaultValue="Leave a comment" />
            <input type="hidden" name="comment_post_ID" defaultValue="1" id="comment_post_ID" />
            <input type="hidden" name="comment_parent" id="comment_parent" defaultValue="0" />
          </div>
        </form>
      </section>
    </>
  )
}

export default FormContactUs