var table = new DataTable(".table", {
    ajax: {
        url: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/86186/datatable-csv.txt",
        content: {
            type: "csv",
            headings: true
        }
    }
});

// Remove demo loader
table.on("datatable.ajax.loaded", function() {
    // IE9
    this.wrapper.className = this.wrapper.className.replace(
        " dataTable-loading",
        ""
    );
});
