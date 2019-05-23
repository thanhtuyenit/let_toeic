﻿// <auto-generated />
using System;
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Migrations;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;
using PPT.Database.Entities;

namespace PPT.Database.Migrations
{
    [DbContext(typeof(ExamContext))]
    [Migration("20190515092219_Create database")]
    partial class Createdatabase
    {
        protected override void BuildTargetModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .HasAnnotation("ProductVersion", "2.2.2-servicing-10034")
                .HasAnnotation("Relational:MaxIdentifierLength", 128)
                .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

            modelBuilder.Entity("PPT.Database.Entities.AccountEntity", b =>
                {
                    b.Property<int>("AccountId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<string>("Address")
                        .HasMaxLength(150);

                    b.Property<string>("Email")
                        .HasMaxLength(255);

                    b.Property<string>("FullName")
                        .HasMaxLength(30);

                    b.Property<string>("Password")
                        .HasMaxLength(255);

                    b.Property<string>("Phone")
                        .HasMaxLength(20);

                    b.HasKey("AccountId");

                    b.ToTable("Accounts");
                });

            modelBuilder.Entity("PPT.Database.Entities.AccountExamEntity", b =>
                {
                    b.Property<int>("AccountExamId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<int>("AccountId");

                    b.Property<int>("ExamId");

                    b.Property<string>("IsStatus")
                        .HasMaxLength(30);

                    b.HasKey("AccountExamId");

                    b.HasIndex("AccountId");

                    b.HasIndex("ExamId");

                    b.ToTable("AccountExams");
                });

            modelBuilder.Entity("PPT.Database.Entities.AccountRoleEntity", b =>
                {
                    b.Property<int>("AccountRoleId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<int>("AccountId");

                    b.Property<int>("RoleId");

                    b.HasKey("AccountRoleId");

                    b.HasIndex("AccountId");

                    b.HasIndex("RoleId");

                    b.ToTable("AccountRoles");
                });

            modelBuilder.Entity("PPT.Database.Entities.AnswerUserEntity", b =>
                {
                    b.Property<int>("AnswerUserId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<int>("AccountId");

                    b.Property<string>("AnswerKey");

                    b.Property<int>("QuestionId");

                    b.HasKey("AnswerUserId");

                    b.HasIndex("AccountId");

                    b.HasIndex("QuestionId");

                    b.ToTable("AnswerUsers");
                });

            modelBuilder.Entity("PPT.Database.Entities.CommentEntity", b =>
                {
                    b.Property<int>("CommentId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<int>("AccountId");

                    b.Property<string>("Content")
                        .HasMaxLength(255);

                    b.Property<DateTime>("DateTimeComment");

                    b.Property<int>("ExamId");

                    b.Property<int>("GroupMemberId");

                    b.HasKey("CommentId");

                    b.HasIndex("AccountId");

                    b.HasIndex("ExamId");

                    b.HasIndex("GroupMemberId");

                    b.ToTable("Comments");
                });

            modelBuilder.Entity("PPT.Database.Entities.ExamEntity", b =>
                {
                    b.Property<int>("ExamId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<DateTime>("EndDate");

                    b.Property<int>("GroupId");

                    b.Property<string>("Name")
                        .HasMaxLength(255);

                    b.Property<DateTime>("StartDate");

                    b.HasKey("ExamId");

                    b.HasIndex("GroupId");

                    b.ToTable("Exams");
                });

            modelBuilder.Entity("PPT.Database.Entities.ExamQuestionEntity", b =>
                {
                    b.Property<int>("ExamQuestionId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<int>("ExamId");

                    b.Property<int>("QuestionId");

                    b.HasKey("ExamQuestionId");

                    b.HasIndex("ExamId");

                    b.HasIndex("QuestionId");

                    b.ToTable("ExamQuestions");
                });

            modelBuilder.Entity("PPT.Database.Entities.GroupEntity", b =>
                {
                    b.Property<int>("GroupId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<DateTime>("CreatedDate");

                    b.Property<string>("Description")
                        .HasMaxLength(200);

                    b.Property<string>("Name")
                        .HasMaxLength(200);

                    b.HasKey("GroupId");

                    b.ToTable("Groups");
                });

            modelBuilder.Entity("PPT.Database.Entities.GroupMemberEntity", b =>
                {
                    b.Property<int>("GroupMemberId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<int>("AccountId");

                    b.Property<int>("GroupId");

                    b.HasKey("GroupMemberId");

                    b.HasIndex("AccountId");

                    b.HasIndex("GroupId");

                    b.ToTable("GroupMembers");
                });

            modelBuilder.Entity("PPT.Database.Entities.GroupOwnerEntity", b =>
                {
                    b.Property<int>("GroupOwnerId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<int>("AccountId");

                    b.Property<int>("GroupId");

                    b.HasKey("GroupOwnerId");

                    b.HasIndex("AccountId");

                    b.HasIndex("GroupId");

                    b.ToTable("GroupOwners");
                });

            modelBuilder.Entity("PPT.Database.Entities.HistoryEntity", b =>
                {
                    b.Property<int>("HistoryId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<int>("AccountId");

                    b.Property<int>("ExamId");

                    b.Property<int>("GroupId");

                    b.HasKey("HistoryId");

                    b.HasIndex("AccountId");

                    b.HasIndex("ExamId");

                    b.HasIndex("GroupId");

                    b.ToTable("Histories");
                });

            modelBuilder.Entity("PPT.Database.Entities.NotificationEntity", b =>
                {
                    b.Property<int>("NotificationId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<int>("AccountId");

                    b.Property<DateTime>("CreatedDate");

                    b.Property<int>("GroupId");

                    b.Property<string>("Message")
                        .HasMaxLength(1000);

                    b.HasKey("NotificationId");

                    b.HasIndex("AccountId");

                    b.HasIndex("GroupId");

                    b.ToTable("Notifications");
                });

            modelBuilder.Entity("PPT.Database.Entities.QuestionEntity", b =>
                {
                    b.Property<int>("QuestionId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<string>("A")
                        .HasMaxLength(255);

                    b.Property<string>("B")
                        .HasMaxLength(255);

                    b.Property<string>("C")
                        .HasMaxLength(255);

                    b.Property<string>("CorrectAnswer")
                        .HasMaxLength(10);

                    b.Property<string>("D")
                        .HasMaxLength(255);

                    b.Property<string>("FileMp3")
                        .HasMaxLength(255);

                    b.Property<string>("Image")
                        .HasMaxLength(255);

                    b.Property<string>("Part")
                        .HasMaxLength(10);

                    b.Property<string>("QuestionName")
                        .HasMaxLength(255);

                    b.Property<int>("QuestionNumber");

                    b.Property<string>("Team")
                        .HasMaxLength(20);

                    b.HasKey("QuestionId");

                    b.ToTable("Questions");
                });

            modelBuilder.Entity("PPT.Database.Entities.RoleEntity", b =>
                {
                    b.Property<int>("RoleId")
                        .ValueGeneratedOnAdd()
                        .HasAnnotation("SqlServer:ValueGenerationStrategy", SqlServerValueGenerationStrategy.IdentityColumn);

                    b.Property<string>("NameRole")
                        .HasMaxLength(20);

                    b.HasKey("RoleId");

                    b.ToTable("Roles");
                });

            modelBuilder.Entity("PPT.Database.Entities.AccountExamEntity", b =>
                {
                    b.HasOne("PPT.Database.Entities.AccountEntity", "Account")
                        .WithMany("AccountExams")
                        .HasForeignKey("AccountId")
                        .OnDelete(DeleteBehavior.Cascade);

                    b.HasOne("PPT.Database.Entities.ExamEntity", "Exam")
                        .WithMany("AccountExams")
                        .HasForeignKey("ExamId")
                        .OnDelete(DeleteBehavior.Cascade);
                });

            modelBuilder.Entity("PPT.Database.Entities.AccountRoleEntity", b =>
                {
                    b.HasOne("PPT.Database.Entities.AccountEntity", "Account")
                        .WithMany("AccountRoles")
                        .HasForeignKey("AccountId")
                        .OnDelete(DeleteBehavior.Cascade);

                    b.HasOne("PPT.Database.Entities.RoleEntity", "Role")
                        .WithMany("AccountRoles")
                        .HasForeignKey("RoleId")
                        .OnDelete(DeleteBehavior.Cascade);
                });

            modelBuilder.Entity("PPT.Database.Entities.AnswerUserEntity", b =>
                {
                    b.HasOne("PPT.Database.Entities.AccountEntity", "Account")
                        .WithMany("AnswerUsers")
                        .HasForeignKey("AccountId")
                        .OnDelete(DeleteBehavior.Cascade);

                    b.HasOne("PPT.Database.Entities.QuestionEntity", "Question")
                        .WithMany("AnswerUsers")
                        .HasForeignKey("QuestionId")
                        .OnDelete(DeleteBehavior.Cascade);
                });

            modelBuilder.Entity("PPT.Database.Entities.CommentEntity", b =>
                {
                    b.HasOne("PPT.Database.Entities.AccountEntity", "Account")
                        .WithMany("Comments")
                        .HasForeignKey("AccountId")
                        .OnDelete(DeleteBehavior.Cascade);

                    b.HasOne("PPT.Database.Entities.ExamEntity", "Exam")
                        .WithMany("Comments")
                        .HasForeignKey("ExamId")
                        .OnDelete(DeleteBehavior.Cascade);

                    b.HasOne("PPT.Database.Entities.GroupMemberEntity", "GroupMember")
                        .WithMany("Comments")
                        .HasForeignKey("GroupMemberId")
                        .OnDelete(DeleteBehavior.Cascade);
                });

            modelBuilder.Entity("PPT.Database.Entities.ExamEntity", b =>
                {
                    b.HasOne("PPT.Database.Entities.GroupEntity", "Group")
                        .WithMany("Exams")
                        .HasForeignKey("GroupId")
                        .OnDelete(DeleteBehavior.Cascade);
                });

            modelBuilder.Entity("PPT.Database.Entities.ExamQuestionEntity", b =>
                {
                    b.HasOne("PPT.Database.Entities.ExamEntity", "Exam")
                        .WithMany("ExamQuestions")
                        .HasForeignKey("ExamId")
                        .OnDelete(DeleteBehavior.Cascade);

                    b.HasOne("PPT.Database.Entities.QuestionEntity", "Question")
                        .WithMany("ExamQuestions")
                        .HasForeignKey("QuestionId")
                        .OnDelete(DeleteBehavior.Cascade);
                });

            modelBuilder.Entity("PPT.Database.Entities.GroupMemberEntity", b =>
                {
                    b.HasOne("PPT.Database.Entities.AccountEntity", "Account")
                        .WithMany("GroupMembers")
                        .HasForeignKey("AccountId")
                        .OnDelete(DeleteBehavior.Cascade);

                    b.HasOne("PPT.Database.Entities.GroupEntity", "Group")
                        .WithMany("GroupMembers")
                        .HasForeignKey("GroupId")
                        .OnDelete(DeleteBehavior.Cascade);
                });

            modelBuilder.Entity("PPT.Database.Entities.GroupOwnerEntity", b =>
                {
                    b.HasOne("PPT.Database.Entities.AccountEntity", "Account")
                        .WithMany("GroupOwners")
                        .HasForeignKey("AccountId")
                        .OnDelete(DeleteBehavior.Cascade);

                    b.HasOne("PPT.Database.Entities.GroupEntity", "Group")
                        .WithMany("GroupOwners")
                        .HasForeignKey("GroupId")
                        .OnDelete(DeleteBehavior.Cascade);
                });

            modelBuilder.Entity("PPT.Database.Entities.HistoryEntity", b =>
                {
                    b.HasOne("PPT.Database.Entities.AccountEntity", "Account")
                        .WithMany("Histories")
                        .HasForeignKey("AccountId")
                        .OnDelete(DeleteBehavior.Cascade);

                    b.HasOne("PPT.Database.Entities.ExamEntity", "Exam")
                        .WithMany("Histories")
                        .HasForeignKey("ExamId")
                        .OnDelete(DeleteBehavior.Cascade);

                    b.HasOne("PPT.Database.Entities.GroupEntity", "Group")
                        .WithMany("HistoryEntity")
                        .HasForeignKey("GroupId")
                        .OnDelete(DeleteBehavior.Cascade);
                });

            modelBuilder.Entity("PPT.Database.Entities.NotificationEntity", b =>
                {
                    b.HasOne("PPT.Database.Entities.AccountEntity", "Account")
                        .WithMany("Notifications")
                        .HasForeignKey("AccountId")
                        .OnDelete(DeleteBehavior.Cascade);

                    b.HasOne("PPT.Database.Entities.GroupEntity", "Group")
                        .WithMany("Notifications")
                        .HasForeignKey("GroupId")
                        .OnDelete(DeleteBehavior.Cascade);
                });
#pragma warning restore 612, 618
        }
    }
}
