<%@ Page Title="" Language="vb" AutoEventWireup="false" MasterPageFile="~/Site.Master" CodeBehind="Login Page.aspx.vb" Inherits="myproject.WebForm1" %>
<asp:Content ID="Content1" ContentPlaceHolderID="HeadContent" runat="server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="MainContent" runat="server">
    <p align="center" 
        
        style="font-family: 'Times New Roman'; font-size: x-large; font-weight: bold; font-style: normal; color: #000000; text-decoration: blink; background-color: #BACDB8; margin-left: 0px;">
        &nbsp;BOOKING GUEST HOUSE ROOM</p>
    <p align="left" 
        
        
        
        style="font-family: 'Times New Roman'; font-size: large; font-weight: bold; font-style: normal; color: #000000; text-decoration: blink; background-color: #FFFFFF; height: 165px;">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:Label ID="Label1" runat="server" Text="User Name"></asp:Label>
&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:TextBox ID="TextBox1" runat="server" Width="256px"></asp:TextBox>
&nbsp;&nbsp;&nbsp;&nbsp;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <asp:Label ID="Labe2" runat="server" Text="Password"></asp:Label>
&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:TextBox ID="TextBox2" runat="server" Width="256px" TextMode="Password"></asp:TextBox><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <asp:Button ID="Button1" runat="server" Text="submit" />
&nbsp;&nbsp;
        <br />
    </p>
    <p align="left" 
        
        
        style="font-family: 'Times New Roman'; font-size: large; font-weight: bold; font-style: normal; color: #000000; text-decoration: blink; background-color: #FFFFFF; margin-top: 0px;"><br />
     NOTE :- for student User name and Password will be their rollno !!!!</p>
</asp:Content>
