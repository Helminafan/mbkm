$.validator.addMethod('greaterThanStartTime', function(value, element) {
    var startDate = new Tim($('#jam_mulai').val());
    var endDate = new Date(value);

    return endDate > startDate;
  }, 'Please enter a valid end date.');