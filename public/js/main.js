(function () {

	// For all modals, focus first field
	$('.modal').on('shown.bs.modal', function () {
		$(this).find('.form-group input').first().focus();
	});

	// Create call
	$('#call-btn').on('click', function() {
		Call.showCreateCallModal($(this));
	});

	// Skip receiver
	$('#call-modal button#skip').on('click', function() {
		Call.skip();
	});

})();

var Call = {

	// keep track of which receivers have already been picked
	excludes: [],

	modal: $('#call-modal'),

	showCreateCallModal: function(button) {
		// reset receiver excludes
		this.excludes = [];
		this.setupModal();

		this.modal.modal('toggle');
	},

	setupModal: function() {
		var that = this;

		this.nextReceiver().done(function(data) {
			that.modal.find('.current-receiver').html("<h3>" + data.name + "</h3>");
			that.modal.find('input[name="receiver_id"]').val(data.id);
		});
	},

	nextReceiver: function() {
		var that = this;

		return $.post('/receivers/next', { 'excludes[]': this.excludes })
			.done(function(data) {
				that.excludes.push(data.id);
			});
	},

	skip: function() {
		var that = this;

		this.setupModal();
	}

};
