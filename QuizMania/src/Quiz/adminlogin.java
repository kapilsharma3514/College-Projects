package Quiz;

import java.awt.Color;
import java.awt.Font;
import java.awt.event.*;
import javax.swing.*;

import java.sql.*;

public class adminlogin implements ActionListener {

	
	public JFrame f;
	login obj = new login();
	String u_name = obj.tf1.getText().toString();
	//String u_name = "vivek_singh";
	JButton review, play, search, rank, b1;
	
	public adminlogin()
	{
		f = new JFrame("Home");
		f.setLayout(null);
		
		ImageIcon logo = new ImageIcon("quizmania.jpg");
		JLabel l1 = new JLabel();
		l1.setIcon(logo);
		l1.setBounds(30,10,300,170);
	
		JLabel l2 = new JLabel("Hi " + u_name + " !");
		l2.setBounds(750,30,200,60);
		l2.setFont(new Font("Comic Sans MS", Font.PLAIN, 24));
		
		JPanel p2 = new JPanel();
		p2.setBackground(Color.black);
		p2.setLayout(null);
		p2.setBounds(20,100,980,50);
		
		
		b1 = new JButton("Logout");
		b1.setBackground(Color.black);
		b1.setForeground(Color.white);
		b1.setBounds(870,8,90,30);
		p2.add(b1);
		b1.addActionListener(this);
		
		JButton b2 = new JButton("Home");
		b2.setBackground(Color.black);
		b2.setForeground(Color.white);
		b2.setBounds(670,8,90,30);
		p2.add(b2);

		
		JPanel p3 = new JPanel();
		p3.setBackground(Color.blue);
		p3.setLayout(null);
		p3.setBounds(200,245,620,400);
		ImageIcon icon = new ImageIcon("download.jpg");
		p3.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		
		review = new JButton("Recommendations");
		play = new JButton("View Topics");
		
		search = new JButton("Add Admin");
		rank = new JButton("Add A Topic/Ques");
		review.setBackground(Color.yellow);
		play.setBackground(Color.yellow);
		
		search.setBackground(Color.yellow);
		rank.setBackground(Color.yellow);
		review.setBounds(55,75,200,50);
		play.setBounds(360,75,200,50);
		
		search.setBounds(55,275,200,50);
		rank.setBounds(360,275,200,50);
		p3.add(review);  p3.add(play);  
		 p3.add(search);  p3.add(rank);
		
		play.addActionListener(this);
		review.addActionListener(this);
		
		search.addActionListener(this);
		rank.addActionListener(this);
		
		//For User
		// Give A Review
		// Play Quiz
		// Topic Wise Statistics
		// OverAll Statistics
		// View All Topics
		// Rankings
		
		//For Admin
		// Add Admin
		// Remove Admin
		// Recommendations
		// Add A Question
		// Add A Topic
		
		f.add(l1);
		f.add(p2);
		f.add(p3);
		f.add(l2);
		f.setVisible(true);
		f.setSize(1025,750);
	}
	
	
	
	public void actionPerformed (ActionEvent ev)
	{
		if (ev.getSource()==b1)
		{
			f.dispose();
			new home();
		}
		
		else if (ev.getSource()==search)
		{
			f.dispose();
			new createadmin();
		}
		
		else if (ev.getSource()==review)
		{
			f.dispose();
			new addRec();
						
		}
		
		
	
		else if (ev.getSource()==play)
		{
			f.dispose();
			new viewTopics();
		}
		
		else if (ev.getSource()==rank)
		{
			//f.dispose();
			final JFrame f2 = new JFrame("What To Add");
			f2.setLayout(null);
			JButton but1 = new JButton("Add Question");
			but1.setBounds(40,20,120,50);
			
			but1.addActionListener(new ActionListener(){
				public void actionPerformed (ActionEvent e)
				{
					f2.dispose();	
					add_question();
				}
			});			
			JButton but2 = new JButton("Add Topic");
			but2.setBounds(40,100,120,50);
			but2.addActionListener(new ActionListener(){
				public void actionPerformed (ActionEvent e)
				{
					f2.dispose();
					add_topic();
				}
			});
			f2.add(but1);
			f2.add(but2);
			f2.setSize(200, 200);
			f2.setVisible(true);
		}
	}
	
	
	
	
	//public class add_question 
	//{
	public void add_question()
	{
		int num=0;	
		System.out.println("aa gye");
		final JFrame f3 = new JFrame("Add Question");
		f3.setVisible(true);
		f3.setSize(620,400);
		final JComboBox topics;
		String [] list_of_topics = new String[4];
		boolean bflag = false;
		
		try
		{
			Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con = DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			Statement st = con.createStatement();
			
			ResultSet rs = st.executeQuery("select count(*) from topics");
			rs.next();
			num = rs.getInt(1);
			list_of_topics = new String[num];
			
			int i=0;
			rs = st.executeQuery("select topicname from topics");
			while (rs.next())
			{
				list_of_topics[i] = rs.getString(1);
				i++;
			}
			bflag = true;
		} catch (Exception ex)
		{
			JOptionPane.showMessageDialog(null, ex.getMessage());
		}
					
		topics = new JComboBox();
		for (int j=0; j<list_of_topics.length; j++)
		{	topics.addItem(list_of_topics[j]); }
		topics.setBounds(30,265,160,30);
		
		//f2.setBounds(200,245,620,400);
					
		JLabel q = new JLabel("Ques :");
		q.setBounds(30,50,50,50);
		f3.add(q);
		
		final JTextField tf1 = new JTextField();
		tf1.setBounds(80,50,500,40);
		f3.add(tf1);
		
		final JTextField tf2 = new JTextField();
		tf2.setBounds(120,100,160,30);
		JLabel a = new JLabel("A:");
		a.setBounds(100,100,50,30);
		
		final JTextField tf3 = new JTextField();
		tf3.setBounds(370,100,160,30);
		JLabel b = new JLabel("B:");
		b.setBounds(350,100,50,30);
		
		final JTextField tf4 = new JTextField();
		tf4.setBounds(120,140,160,30);
		JLabel c = new JLabel("C:");
		c.setBounds(100,140,50,30);
		
		final JTextField tf5 = new JTextField();
		tf5.setBounds(370,140,160,30);
		JLabel d = new JLabel("D:");
		d.setBounds(350,140,50,30);
		
		final JTextField correct = new JTextField();
		correct.setBounds(240,190,160,30);
		JLabel lcorrect = new JLabel("Correct Ans:");
		lcorrect.setBounds(150,190,160,30);
		
		JLabel tnum = new JLabel("Choose Topic Name:");
		tnum.setText("");
		tnum.setBounds(30,265,160,30);
			
		JLabel diff = new JLabel("Difficulty:");
		diff.setBounds(300,265,160,30);
		
		final JComboBox tdiff = new JComboBox();
		tdiff.addItem("E");
		tdiff.addItem("M");
		tdiff.addItem("D");
		tdiff.setBounds(370,265,50,30);
		
		//final JTextField topicnum = new JTextField();
		//topicnum.setBounds(150,265,160,30);
		
		
		
		final JButton submit = new JButton("Submit");
		final JButton cancel = new JButton("Cancel");
		submit.setBounds(290,330,120,40);
		submit.setBackground(Color.red);
		cancel.setBackground(Color.red);
		cancel.setBounds(440,330,120,40);
		f3.add(submit); f3.add(cancel);
		//f3.setVisible(true);
		
		submit.addActionListener(new ActionListener()
		{
			public void actionPerformed(ActionEvent event)
			{
				if (correct.getText().toString().equals("") ||
						tf1.getText().toString().equals("") ||
						tf2.getText().toString().equals("") ||
						tf3.getText().toString().equals("") ||
						tf4.getText().toString().equals("") ||
						tf5.getText().toString().equals("") )
					{
						JOptionPane.showMessageDialog(null, "One or more fields is empty !");
						return;
					}
					
				if (correct.getText().toString().equals(tf2.getText().toString())==false
				      && correct.getText().toString().equals(tf3.getText().toString())==false
				      && correct.getText().toString().equals(tf4.getText().toString())==false
				      && correct.getText().toString().equals(tf5.getText().toString())==false )
					{
						JOptionPane.showMessageDialog(null, "Answer should match with one of the options provided !");
						return;
					}
					
				int flag=0, tnumber=0;
					
				try 
				{	Class.forName("oracle.jdbc.driver.OracleDriver");
					Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
					
					Statement st = con.createStatement();
					ResultSet check;
					
					check = st.executeQuery("select topicno from topics where topicname='"+topics.getSelectedItem().toString()+"'");
					check.next();
					tnumber=check.getInt(1);
					
					System.out.println("going to select count");
					check = st.executeQuery("select count(*) from questionbank");
					check.next();
					flag = check.getInt(1)+1;
					System.out.println("going to insert flag is "+flag+" topic number is ");
					st.executeQuery("insert into questionbank (qno, topicno, ques, a1, a2, a3, a4, correctans, difficulty) values ( "+flag+","+tnumber+",'"+tf1.getText().toString()+"','"+tf2.getText().toString()+"','"+tf3.getText().toString()+"','"+tf4.getText().toString()+"','"+tf5.getText().toString()+"','"+correct.getText().toString()+"','E')");
																											
					con.commit();
					st.close();
					con.close();
						
				} catch (Exception ex) 
				{ JOptionPane.showMessageDialog(null, ex.getMessage());
				 
				}
					
				  JOptionPane.showMessageDialog(null, "Question Added");
				  f3.dispose();
			    }
		});
		
		cancel.addActionListener(new ActionListener(){
			public void actionPerformed(ActionEvent event)
			{
				f3.dispose();
			}
			});
			
		f3.add(tf2); f3.add(tf3); f3.add(tf4); f3.add(tf5); f3.add(correct);
		f3.add(a); f3.add(b); f3.add(c); f3.add(d); f3.add(lcorrect);
		 f3.add(topics); f3.add(diff); f3.add(tdiff); f3.add(tnum);
		
	}
	
	
	
	public void add_topic()
	{
		System.out.println("adding new topic");
		final JFrame f3 = new JFrame("Add Question");
		f3.setLayout(null);
		f3.setSize(290,180);
		f3.setVisible(true);
		
		JButton submit = new JButton("Submit");
		JButton cancel = new JButton("Cancel");
		submit.setBackground(Color.red);
		cancel.setBackground(Color.red);		
		
		JLabel tname = new JLabel("Enter New Topic:");
		tname.setBounds(30,40,100,30);
		final JTextField ttname = new JTextField();
		ttname.setBounds(150,40,120,30);
		
		submit.setBounds(30,100,100,40);
		cancel.setBounds(160,100,100,40);
		
		f3.add(tname);	f3.add(ttname);
		f3.add(submit);	f3.add(cancel);
		
		submit.addActionListener(new ActionListener(){
			public void actionPerformed(ActionEvent e)
			{
				boolean bflag = true;
				
				if (ttname.getText().toString().equals(""))
				{
					JOptionPane.showMessageDialog(null, "Enter A Topic");
					return;
				}
				
				try 
				{	Class.forName("oracle.jdbc.driver.OracleDriver");
					Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
					Statement st = con.createStatement();
					
					ResultSet rs = st.executeQuery("select userno from userlist");
					while (rs.next())
					{
						if (rs.getString(1).equals(ttname.getText().toString()))
						{
							JOptionPane.showMessageDialog(null, "Topic Already Exists");
							bflag = false;	
							break;
						}
					}
					
					if (bflag==true)
					{
						rs = st.executeQuery("select count(*) from topics");
						rs.next();
						int num = rs.getInt(1);
						num++;
						
						st.executeQuery("insert into topics values ("+num+",'"+ttname.getText().toString()+"','"+ttname.getText().toString()+"')");
						JOptionPane.showMessageDialog(null, "Topic Added");
					}
					
					con.commit();
					st.close();
					con.close();
				} catch (Exception exc)
				{
					JOptionPane.showMessageDialog(null, exc.getMessage());
				}
				
			}
		});
		
		cancel.addActionListener(new ActionListener(){
			public void actionPerformed(ActionEvent e)
			{
				f3.dispose();
			}
		});
	}
		
		
	//}
	
	
	
	
	public static void main (String a[])
	{
		new adminlogin();
		//loginhome obj = new loginhome();
		//obj.login_home();
	}
	
	
}
