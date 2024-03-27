</footer>
<script>
    
    $(document).ready(function() {
        var currentIndex = 0;
        var totalQuotes = $('.quote-card').length;

        $('#nextBtn').click(function() {
            showQuote(currentIndex + 1);
        });

        $('#prevBtn').click(function() {
            showQuote(currentIndex - 1);
        });

        function showQuote(index) {
            if (index >= 0 && index < totalQuotes) {
                $('.quote-card').css('transform', 'translateX(' + (-index * 100) + '%)');
                currentIndex = index;
            }
        }
    });

</script>