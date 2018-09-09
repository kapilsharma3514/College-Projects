package Quiz;

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;


public class loginhome implements ActionListener{

	
	public JFrame f;
	login obj = new login();
	String u_name = obj.tf1.getText().toString();
	//String u_name = "wtfudge";
	JButton review, play, topicwiseb, overallb, search, rank, b1;
	
	public loginhome()
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
		
		
		review = new JButton("Recommend A Question");
		play = new JButton("Take A Quiz");
		topicwiseb = new JButton("Topic Wise Stats");
		overallb = new JButton("Overall Stats");
		search = new JButton("Give Review/Rating");
		rank = new JButton("Rankings");
		review.setBackground(Color.yellow);
		play.setBackground(Color.yellow);
		topicwiseb.setBackground(Color.yellow);
		overallb.setBackground(Color.yellow);
		search.setBackground(Color.yellow);
		rank.setBackground(Color.yellow);
		review.setBounds(55,75,200,50);
		play.setBounds(360,75,200,50);
		topicwiseb.setBounds(55,175,200,50);
		overallb.setBounds(360,175,200,50);
		search.setBounds(55,275,200,50);
		rank.setBounds(360,275,200,50);
		p3.add(review);  p3.add(play);  p3.add(topicwiseb);
		p3.add(overallb);  p3.add(search);  p3.add(rank);
		
		play.addActionListener(this);
		review.addActionListener(this);
		topicwiseb.addActionListener(this);
		overallb.addActionListener(this);
		rank.addActionListener(this);
		search.addActionListener(this);
		
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
		
		else if (ev.getSource()==play)
		{
			f.dispose();
			selectatopic obj = new selectatopic();
			obj.select_topic();
		}
		
		else if (ev.getSource()==review)
		{
			f.dispose();
			new recommendques();
						
		}
		
		else if (ev.getSource()==topicwiseb)
		{
			f.dispose();
			new topicwise();
		}
	
		else if (ev.getSource()==overallb)
		{
			f.dispose();
			new overall();
		}
		
		else if (ev.getSource()==rank)
		{
			f.dispose();
			new userranks();
		}
		
		else if (ev.getSource()==search)
		{
			f.dispose();
			new reviewRating();
		}
	}
	
	
	
	
	public static void main (String a[])
	{
		new loginhome();
		//loginhome obj = new loginhome();
		//obj.login_home();
	}
	
}
