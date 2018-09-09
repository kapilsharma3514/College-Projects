package Quiz;

import java.awt.*;
import java.awt.event.*;
import java.sql.*;
import javax.swing.*;


public class addRec implements ActionListener {

	
	JFrame f;
	JButton b2,b3,add[],del[];
	String suserno[], sques[], sa1[], sa2[], sa3[], sa4[], sans[];
	int stopic[];
	final JComboBox tdiff=new JComboBox();
	
	
	public addRec()
	{
		int n=0;
		JLabel userno[]=null, ques[]=null, a1[]=null, a2[]=null, a3[]=null, a4[]=null, ans[]=null, topic[]=null;
		
		tdiff.addItem("E".toString());
		tdiff.addItem("M".toString());
		tdiff.addItem("D".toString());		
		
		f = new JFrame("View Recommendations");
		f.setLayout(null);
		
		ImageIcon logo = new ImageIcon("quizmania.jpg");
		JLabel l1 = new JLabel();
		l1.setIcon(logo);
		l1.setBounds(30,10,300,170);
	
		JPanel p2 = new JPanel();
		p2.setBackground(Color.black);
		p2.setLayout(null);
		p2.setBounds(20,100,980,50);
		
		b2 = new JButton("Home");
		b3 = new JButton("Logout");
		b2.addActionListener(this);
		b3.addActionListener(this);
		b2.setBackground(Color.black);
		b2.setForeground(Color.white);
		b3.setBackground(Color.black);
		b3.setForeground(Color.white);
		b2.setBounds(670,8,90,30);
		b3.setBounds(870,8,90,30);
		p2.add(b2);
		p2.add(b3);
		
		JPanel p3 = new JPanel();
		p3.setLayout(null);
		p3.setBackground(Color.cyan);
		p3.setPreferredSize(new Dimension(1000,450));
		ImageIcon icon = new ImageIcon("download.jpg");
		
		
		JScrollPane pane = new JScrollPane(p3);
		pane.setBounds(150,220,730,450);
		pane.setBorder(BorderFactory.createMatteBorder(5, 5, 5, 5, icon));
		
		
		JLabel l2 = new JLabel("View Recommendations");
		l2.setFont(new Font("Comic Sans MS",Font.BOLD,32));
		l2.setForeground(Color.red);
		l2.setBounds(200,10,450,50);
		p3.add(l2);
		
		JLabel error = new JLabel("No New Recommendations");
		error.setBounds(300,100,300,50);
		
		try 
		{	Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			
			Statement st = con.createStatement();
		
			ResultSet check = st.executeQuery("select count(*) from recommendations");
			check.next();
			n = check.getInt(1);
			if (n==0)
			{
				p3.add(error);
			}
			else
			{
				userno = new JLabel[n];
				ques = new JLabel[n];
				a1 = new JLabel[n];
				a2 = new JLabel[n];
				a3 = new JLabel[n];
				a4 = new JLabel[n];
				ans = new JLabel[n];
				topic = new JLabel[n];
				
				suserno = new String[n];
				sques = new String[n];
				sa1 = new String[n];
				sa2 = new String[n];
				sa3 = new String[n];
				sa4 = new String[n];
				sans = new String[n];
				stopic = new int[n];
				add = new JButton[n]; del = new JButton[n];
				
				check = st.executeQuery("select * from recommendations");
				int i=0;
				while (check.next())
				{
					suserno[i] = (Integer.toString(i+1)+check.getString("userno"));
					sques[i] = (check.getString("ques"));
					sa1[i] = (check.getString("a1"));
					sa2[i] = (check.getString("a2"));
					sa3[i] = (check.getString("a3"));
					sa4[i] = (check.getString("a4"));
					sans[i] = (check.getString("correctans"));
					stopic[i] = (check.getInt("topicno"));
					i++;					
				}
			}
			
			for (int i=0, x=40, y=100; i<n; i++, y+=100)
			{
				userno[i] = new JLabel("#1 (By "+suserno[i]+")");
				ques[i] = new JLabel("Ques -> "+sques[i]);
				a1[i] = new JLabel("A > "+sa1[i]);
				a2[i] = new JLabel("B > "+sa2[i]);
				a3[i] = new JLabel("C > "+sa3[i]);
				a4[i] = new JLabel("D > "+sa4[i]);
				ans[i] = new JLabel("Ans > "+sans[i]);
				topic[i] = new JLabel("Topic : "+stopic[i]);
				add[i] = new JButton("Add");
				add[i].setBackground(Color.pink);
				del[i] = new JButton("Delete");
				del[i].setBackground(Color.pink);
				
				userno[i].setBounds(x,y,200,30);
				ques[i].setBounds(x,y+30,1000,30);
				a1[i].setBounds(x,y+60,200,30);
				a2[i].setBounds(x+200,y+60,200,30);
				a3[i].setBounds(x+400,y+60,200,30);
				a4[i].setBounds(x+600,y+60,200,30);
				ans[i].setBounds(x,y+90,200,30);
				topic[i].setBounds(x+200,y+90,200,30);
				add[i].setBounds(x+400,y+90,120,30);
				del[i].setBounds(x+600,y+90,120,30);
				
				p3.add(userno[i]); p3.add(ques[i]); p3.add(a1[i]);
				p3.add(a2[i]); p3.add(a3[i]); p3.add(a4[i]);
				p3.add(ans[i]); p3.add(topic[i]); p3.add(add[i]);
				p3.add(del[i]);
				
				add[i].addActionListener(new ActionListenerA(i));
				del[i].addActionListener(new ActionListenerB(i));
			}
						
			
			con.commit();
			st.close();
			con.close(); 
		} catch (Exception ae) 
		{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
		
		
		
		f.add(l1);
		f.add(p2);
		f.add(pane);
		f.setVisible(true);
		f.setSize(1025,750);
	}
	
	
	
	
	public class ActionListenerA implements ActionListener {
		
		int index;
		
		public ActionListenerA(int i)
		{
			index=i;
		}
		
		public void actionPerformed (ActionEvent e)
		{
			
			tdiff.setBounds(40,60,50,20);
			
			JButton ok = new JButton("OK");
			ok.setBounds(30,100,70,20);
			
			JLabel diff = new JLabel("Select Difficulty :");
			diff.setBounds(20,20,150,30);
			
			final JFrame f2 = new JFrame("Select Difficulty");
			f2.setLayout(null);
			f2.add(tdiff);
			f2.add(ok);
			f2.add(diff);
			f2.setSize(150,160);
			f2.setVisible(true);
			
			ok.addActionListener(new ActionListener(){
				public void actionPerformed (ActionEvent e)
				{
					f2.dispose();
					add_questionbank(index);
				}
			});
		}
	}
	
	
	
public class ActionListenerB implements ActionListener {
		
		int index;
		boolean bflag = false;
		
		public ActionListenerB(int i)
		{
			index=i;
		}
		
		public void actionPerformed (ActionEvent e)
		{
			try 
			{	Class.forName("oracle.jdbc.driver.OracleDriver");
				Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
				
				Statement st = con.createStatement();	
				st.executeQuery("delete from recommendations where ques = '"+sques[index]+"'");
				
				bflag=true;
				
				con.commit();
				st.close();
				con.close(); 
			} catch (Exception ae) 
			{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
			
			if (bflag==true)
			{
				f.dispose();
				new addRec();
			}
			
		}
	}
	
	
	
	public void add_questionbank(int index)
	{
		int n=0;
		boolean bflag=false;
		//System.out.println(tdiff.getSelectedItem().toString());
		try 
		{	Class.forName("oracle.jdbc.driver.OracleDriver");
			Connection con=DriverManager.getConnection("jdbc:oracle:thin:@localhost:1521:orcl","hr","hr");
			
			Statement st = con.createStatement();
		
			ResultSet check = st.executeQuery("select count(*) from questionbank");
			check.next();
			n = check.getInt(1);
			n++;
			System.out.println("n+1 is "+n);
			System.out.println(tdiff.getSelectedItem().toString());
			System.out.println(stopic[index]);
			st.executeQuery("insert into questionbank values ("+n+1+",'"+sques[index]+"','"+sa1[index]+"','"+sa2[index]+"','"+sa3[index]+"','"+sa4[index]+"','"+sans[index]+"',0,0,"+stopic[index]+",'"+tdiff.getSelectedItem().toString()+"')");
			st.executeQuery("delete from recommendations where ques = '"+sques[index]+"'");
			System.out.println("yay");
			bflag=true;
			
			con.commit();
			st.close();
			con.close(); 
		} catch (Exception ae) 
		{ JOptionPane.showMessageDialog(null, ae.getMessage()); }
		
		if (bflag==true)
		{
			f.dispose();
			new addRec();
		}		
	}
	
	
	
	
	public void actionPerformed (ActionEvent e)
	{
		if (e.getSource()==b2)
		{
			f.dispose();
			new adminlogin();
		}
		
		else if (e.getSource()==b3)
		{
			f.dispose();
			new home();
		}
		
		
	}
	
	
	
	public static void main (String a[])
	{
		new addRec();
	}
	
	
}
