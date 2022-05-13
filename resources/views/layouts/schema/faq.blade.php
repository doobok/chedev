<script type="application/ld+json">
{
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        <?php $i = 0;?>
    @foreach ($faqs as $answer)
        <?php $i++;?>
        {"@type": "Question",
        "name": "{{$answer->getTranslatedAttribute('ask')}}",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "{{ $answer->getTranslatedAttribute('answer') }}"
        }
      }@if ($i < $faqs->count()),@endif
    @endforeach
    ]
    }

</script>
