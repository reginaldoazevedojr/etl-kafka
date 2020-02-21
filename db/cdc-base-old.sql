use db_ciap;

EXEC sys.sp_cdc_enable_db;

EXEC sys.sp_cdc_enable_table
@source_schema = N'dbo',
@source_name   = N'CIA_Associado',
@role_name     = NULL,
@supports_net_changes = 1;

EXEC sys.sp_cdc_help_change_data_capture;

sys.fn_cdc_map_lsn_to_time

select sys.fn_cdc_map_lsn_to_time(__$start_lsn) from cdc.dbo_CIA_Associado_CT;

select sys.fn_cdc_map_time_to_lsn('smallest greater than', '2007-01-02 12:00:00.000');

DECLARE @from_lsn binary (10), @to_lsn binary (10), @row_filter_option nvarchar(30)
SET @from_lsn = sys.fn_cdc_get_min_lsn('dbo_cia_associado')
SET @to_lsn = sys.fn_cdc_get_max_lsn()
SET @row_filter_option = 'all'

SELECT *
FROM cdc.fn_cdc_get_all_changes_dbo_cia_associado(@from_lsn, @to_lsn, @row_filter_option)
ORDER BY __$seqval;


SELECT *
FROM cdc.fn_cdc_get_all_changes_dbo_cia_associado(
sys.fn_cdc_map_time_to_lsn('smallest greater than', '2020-02-21 00:00:00.000'),
sys.fn_cdc_get_max_lsn(),
'all'
)
ORDER BY __$seqval;


SELECT sys.fn_cdc_map_time_to_lsn('smallest greater than', '2020-02-21 00:00:00.000')