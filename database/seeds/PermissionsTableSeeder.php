<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 20,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 21,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 22,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 23,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 24,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 25,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 26,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 27,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 28,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 29,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 30,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 31,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 32,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 33,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 34,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 35,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 36,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 37,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 38,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 39,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 40,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 41,
                'title' => 'expense_create',
            ],
            [
                'id'    => 42,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 43,
                'title' => 'expense_show',
            ],
            [
                'id'    => 44,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 45,
                'title' => 'expense_access',
            ],
            [
                'id'    => 46,
                'title' => 'income_create',
            ],
            [
                'id'    => 47,
                'title' => 'income_edit',
            ],
            [
                'id'    => 48,
                'title' => 'income_show',
            ],
            [
                'id'    => 49,
                'title' => 'income_delete',
            ],
            [
                'id'    => 50,
                'title' => 'income_access',
            ],
            [
                'id'    => 51,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 52,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 53,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 54,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 55,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 56,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 57,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 58,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 59,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 60,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 61,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 62,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 63,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 64,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 65,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 66,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 67,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 68,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 69,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 70,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 71,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 72,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 73,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 74,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 75,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 76,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 77,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 78,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 79,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 80,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 81,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 82,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 83,
                'title' => 'task_create',
            ],
            [
                'id'    => 84,
                'title' => 'task_edit',
            ],
            [
                'id'    => 85,
                'title' => 'task_show',
            ],
            [
                'id'    => 86,
                'title' => 'task_delete',
            ],
            [
                'id'    => 87,
                'title' => 'task_access',
            ],
            [
                'id'    => 88,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 89,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 90,
                'title' => 'currency_create',
            ],
            [
                'id'    => 91,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 92,
                'title' => 'currency_show',
            ],
            [
                'id'    => 93,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 94,
                'title' => 'currency_access',
            ],
            [
                'id'    => 95,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 96,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 97,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 98,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 99,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 100,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 101,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 102,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 103,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 104,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 105,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 106,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 107,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 108,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 109,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 110,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 111,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 112,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 113,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 114,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 115,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 116,
                'title' => 'client_create',
            ],
            [
                'id'    => 117,
                'title' => 'client_edit',
            ],
            [
                'id'    => 118,
                'title' => 'client_show',
            ],
            [
                'id'    => 119,
                'title' => 'client_delete',
            ],
            [
                'id'    => 120,
                'title' => 'client_access',
            ],
            [
                'id'    => 121,
                'title' => 'project_create',
            ],
            [
                'id'    => 122,
                'title' => 'project_edit',
            ],
            [
                'id'    => 123,
                'title' => 'project_show',
            ],
            [
                'id'    => 124,
                'title' => 'project_delete',
            ],
            [
                'id'    => 125,
                'title' => 'project_access',
            ],
            [
                'id'    => 126,
                'title' => 'note_create',
            ],
            [
                'id'    => 127,
                'title' => 'note_edit',
            ],
            [
                'id'    => 128,
                'title' => 'note_show',
            ],
            [
                'id'    => 129,
                'title' => 'note_delete',
            ],
            [
                'id'    => 130,
                'title' => 'note_access',
            ],
            [
                'id'    => 131,
                'title' => 'document_create',
            ],
            [
                'id'    => 132,
                'title' => 'document_edit',
            ],
            [
                'id'    => 133,
                'title' => 'document_show',
            ],
            [
                'id'    => 134,
                'title' => 'document_delete',
            ],
            [
                'id'    => 135,
                'title' => 'document_access',
            ],
            [
                'id'    => 136,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 137,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 138,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 139,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 140,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 141,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 142,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 143,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 144,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 145,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 146,
                'title' => 'team_create',
            ],
            [
                'id'    => 147,
                'title' => 'team_edit',
            ],
            [
                'id'    => 148,
                'title' => 'team_show',
            ],
            [
                'id'    => 149,
                'title' => 'team_delete',
            ],
            [
                'id'    => 150,
                'title' => 'team_access',
            ],
            [
                'id'    => 151,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 152,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 153,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 154,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 155,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
