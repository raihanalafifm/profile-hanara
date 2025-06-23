<?php
// resources/views/components/faq-schema.blade.php
// Component untuk generate FAQ Schema JSON-LD

$faqItems = $faqItems ?? [];
?>

@if (!empty($faqItems))
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @foreach($faqItems as $index => $faq)
        {
            "@type": "Question",
            "name": "{{ addslashes($faq['question']) }}",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ addslashes($faq['answer']) }}"
            }
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
@endif
