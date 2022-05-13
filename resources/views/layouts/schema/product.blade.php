<script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "{{$name}}",
      "image": "{{$image}}",
      "description": "{{$description}}",
      "sku": "0000{{$id}}",
{{--      "mpn": "925872",--}}
      "brand": {
        "@type": "Brand",
        "name": "{{ config('app.name') }}"
      },
{{--      "review": {--}}
{{--        "@type": "Review",--}}
{{--        "reviewRating": {--}}
{{--          "@type": "Rating",--}}
{{--          "ratingValue": "4",--}}
{{--          "bestRating": "5"--}}
{{--        },--}}
{{--        "author": {--}}
{{--          "@type": "Person",--}}
{{--          "name": "Fred Benson"--}}
{{--        }--}}
{{--      },--}}
      "aggregateRating": {
        "@type": "AggregateRating",
        "bestRating": "5",
        "worstRating": "1",
        "ratingValue": "{{$rating->rating}}",
        "reviewCount": "{{$rating->count}}"
      },
      "offers": {
        "@type": "Offer",
        "url": "{{url()->current()}}",
        "priceCurrency": "USD",
        "price": "{{$price ?? 200}}",
        "priceValidUntil": "{{ \Carbon\Carbon::now()->endOfMonth()->format('Y-m-d') }}",
        "itemCondition": "https://schema.org/NewCondition",
        "availability": "https://schema.org/InStock",
        "seller": {
          "@type": "Organization",
          "name": "{{ config('app.name') }}"
        }
      }
    }
    </script>
