<script type="application/ld+json">
  {
    "@context" : "https://schema.org/",
    "@type": "AggregateRating",
    "itemReviewed": {
      "@type": "Organization",
      "name" : "{{$name}}"
    },
    "ratingValue": "{{$rating}}",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount" : "{!! $count !!}"
  }
  </script>
