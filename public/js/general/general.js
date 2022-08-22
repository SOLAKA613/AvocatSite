$(".date").daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
    minYear: 1901,
    maxYear: parseInt(moment().format("YYYY"),10),
    format:  'DD/MM/YYYY', 
    locale: { 
        format: 'DD/MM/YYYY'
    }
});