<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "headline": "{{$title}}",
      "image": "{{$image}}",
      "datePublished": "{{$created}}",
      "dateModified": "{{$updated}}",
      "author": {
          "@type": "Person",
          "name": "{{setting('contact.telegram_username')}}",
          "url": "{{setting('contact.telegram_profile')}}"
        }
    }
    </script>
